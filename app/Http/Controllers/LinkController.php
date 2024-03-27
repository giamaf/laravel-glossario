<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('admin.links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        $data = $request->validate(
            [
                'label' => ['required', 'string', 'max:15', Rule::unique('links')->ignore($link->id)],
                'url' => ['required', 'string', Rule::unique('links')->ignore($link->id)]
            ],
            [
                'label.unique' => 'Label già esistente',
                'label.required' => 'E\' necessario inserire una label',
                'label.max' => 'La label può avere massimo :max caratteri',
                'url.unique' => 'Url già esistente',
                'url.required' => 'E\' necessario inserire un url'
            ]
        );

        $link->update($data);
        return to_route('admin.words.show', $link->word_id)->with('message', 'Link modificato con successo')->with('type', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return back();
    }
}
