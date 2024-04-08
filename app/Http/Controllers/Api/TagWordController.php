<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Word;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagWordController extends Controller
{
    public function __invoke(string $slug)
    {
        $tag = Tag::whereSlug($slug)->first();

        if (!$tag) return response(null, 404);

        $words = Word::whereHas('tags', function ($query) use ($tag) {
            $query->where('tags.id', $tag->id);
        })->with('links', 'tags')->get();

        return response()->json(['words' => $words, 'label' => $tag->label]);
    }
}
