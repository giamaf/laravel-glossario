<?php

namespace App\Http\Controllers\Admin;

use App\Models\Word;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function store(Request $request)
    {
        $data = $request->all();
        $word = new Word();
        $word->fill($data);
        $word->save();

        return to_route('admin.words.show', $word->id);
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
        // // $request->validate([
        //     // REgolaattributi
        //     'name' => 'required|string|max:255',
        // ]);
        $data= $request->all();
        $word->term= $data['term'];
        $word->description= $data['description'];
        $word->save();
    
        return redirect()->route('admin.index')->with('success', 'Word updated successfully');
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
}
