<?php

namespace App\Http\Controllers\Admin;

use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $words = Word::orderBy('term')->orderByDesc('created_at')->get();
        return view('admin.words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::select('id', 'label')->get();
        return view('admin.words.create', ['word' => new Word(), 'tags'=> $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Word $word)
    {

        // Validazione
        $request->validate(
            [
                'term' => 'unique:words|required|string|min:2|max:30',
                'description' => ['string', 'required'],
                'links.*.label' => 'nullable|unique:links|string|max:15',
                'links.*.url' => 'nullable|unique:links|url',
                'tags' => 'nullable|exists:tags, id'
            ],
            [
                'term.unique' => 'Termine già esistente',
                'term.required' => 'Inserire un termine',
                'term.min' => 'Il termine deve avere almeno :min caratteri',
                'term.max' => 'Il termine può avere massimo :max caratteri',
                'description.required' => 'Inserire una descrizione',
                'description.string' => 'Descrizione non valida',
                'links.*.label.unique' => 'Uno dei link inseriti è già esistente',
                'links.*.label.max' => 'Il nome del link non può superare i 15 caratteri ',
                'links.*.url.unique' => 'Uno degli url inseriti è già esistente',
                'links.*.url.url' => 'Uno degli url inseriti ha formato non valido',
                'tags.exists' => 'Tag scelto non è presente'
            ]
        );

        $data = $request->all();

        $word = new Word();
        $word->fill($data);
        $word->save();

        foreach ($data['links'] as $link) {
            if ($link['label'] && $link['url']) {
                $new_link = new Link();
                $new_link->word_id = $word->id;
                $new_link->fill($link);
                $new_link->save();
            }
        }

        if (Arr::exists($data, 'tags')){
            $word -> tags()->attach($data['tags']);
        }
        return to_route('admin.words.show', $word->id)
            ->with('message', 'Termine creato con successo')
            ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        return view('admin.words.show', compact('word'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        $tags = Tag::select('id', 'label')->get();
        return view('admin.words.edit', compact('word', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word)
    {
        // Validazione
        $data = $request->validate(
            [
                'term' => ['required', 'string', 'min:2', 'max:30', Rule::unique('words')->ignore($word->id)],
                'description' => ['string', 'required',],
                'links.*.label' => 'nullable|unique:links|string|max:15',
                'links.*.url' => 'nullable|unique:links|url',
                'tags' => 'nullable|exists:tags, id'
            ],
            [
                'term.unique' => 'Termine già esistente',
                'term.required' => 'Inserire un termine',
                'term.min' => 'Il termine deve avere almeno :min caratteri',
                'term.max' => 'Il termine può avere massimo :max caratteri',
                'description.required' => 'Inserire una descrizione',
                'description.string' => 'Descrizione non valida',
                'links.*.label.unique' => 'Uno dei link inseriti è già esistente',
                'links.*.label.max' => 'Il nome del link non può superare i 15 caratteri ',
                'links.*.url.unique' => 'Uno degli url inseriti è già esistente',
                'links.*.url.url' => 'Uno degli url inseriti ha formato non valido',
                'tags.exists' => 'Tag scelto non è presente'
            ]
        );

        $word->update($data);

        foreach ($data['links'] as $link) {
            if ($link['label'] && $link['url']) {
                $new_link = new Link();
                $new_link->word_id = $word->id;
                $new_link->fill($link);
                $new_link->save();
            }
        }

        if (Arr::exists($data, 'tags')){
            $word -> tags()->sync($data['tags']);
        } elseif (!Arr::exists($data, 'tags') && $word->has('tags')) {
            $word -> tags()->detach();
        }

        return to_route('admin.words.show', $word->id)
            ->with('message', 'Termine modificato con successo!')
            ->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();

        return to_route('admin.words.index')->with('type', 'warning')
            ->with('message', "Termine spostato nel cestino!");
    }

    // # SOFT DELETE

    public function trash()
    {
        $words = Word::onlyTrashed()->get();

        return view('admin.words.trash', compact('words'));
    }

    public function restore(Word $word)
    {
        $word->restore();

        return to_route('admin.words.trash')
            ->with('type', 'success')
            ->with('message', "Termine ripristinato con successo!");
    }

    public function drop(Word $word)
    {
        $word->forceDelete();

        return to_route('admin.words.trash')
            ->with('type', 'danger')
            ->with('message', "Termine eliminato definitivamente!");
    }

    // # MASSIVE ERASE AND MASSIVE RESTORE

    public function massiveDrop()
    {
        // Recupero tutti i termini nel cestino
        $trashed_terms = Word::onlyTrashed()->get();

        // Se c'è qualcosa nel cestino
        if (count($trashed_terms)) {
            // Per ogni termine nel cestino...
            foreach ($trashed_terms as $term) {
                // Elimino definitivamente
                $term->forceDelete();
            }

            $message = 'Cestino svuotato con successo!';
        }


        return to_route('admin.words.trash')->with('type', 'danger')
            ->with('message', $message);
    }

    public function massiveRestore()
    {
        // Recupero tutti i termini nel cestino
        $trashed_terms = Word::onlyTrashed()->get();

        // Preparo una variabile per inserire un messaggio
        $message = 'Il cestino è vuoto!';

        // Se c'è qualcosa nel cestino
        if (count($trashed_terms)) {
            // Per ogni termine nel cestino...
            foreach ($trashed_terms as $term) {

                // Ripristino
                $term->restore();
            }
            $message = 'Termini ripristinati con successo!';
        }

        return to_route('admin.words.trash')->with('message', $message)->with('type', 'secondary');
    }
}
