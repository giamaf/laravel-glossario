<?php

namespace App\Http\Controllers\Admin;

use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Link;
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
        return view('admin.words.create', ['word' => new Word()]);
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
                'description' => ['string', 'required',]
            ],
            [
                'term.unique' => 'Termine già esistente',
                'term.required' => 'Inserire un termine',
                'term.min' => 'Il termine deve avere almeno :min caratteri',
                'term.max' => 'Il termine può avere massimo :max caratteri',
                'description.required' => 'Inserire una descrizione',
                'description.string' => 'Descrizione non valida',
            ]
        );

        $data = $request->all();
        $word = new Word();
        $word->fill($data);
        $word->save();


        if (($data['label']) && ($data['url'])) {
            $new_link = new Link();
            $new_link->word_id = $word->id;
            $new_link->fill($data);
            $new_link->save();
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
        return view('admin.words.edit', compact('word'));
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
                'description' => ['string', 'required',]
            ],
            [
                'term.unique' => 'Termine già esistente',
                'term.required' => 'Inserire un termine',
                'term.min' => 'Il termine deve avere almeno :min caratteri',
                'term.max' => 'Il termine può avere massimo :max caratteri',
                'description.required' => 'Inserire una descrizione',
                'description.string' => 'Descrizione non valida',
            ]
        );

        $word->update($data);

        //todo Fixare il messaggio dell'alert all'update
        return to_route('admin.words.show', $word->id)
            ->with('message', 'Termine modificato con successo')
            ->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Word $word)
    {
        $word->delete();

        //todo Inserire messaggi di feedback
        return to_route('admin.words.index');
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
}
