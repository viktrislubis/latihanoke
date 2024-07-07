<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, $film_id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Review::create([
            'film_id' => $film_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->route('film.show', $film_id)->with('success', 'Review added successfully.');
    }
}
