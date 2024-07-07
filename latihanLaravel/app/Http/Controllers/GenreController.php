<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
  public function index()
  {
    $genres = Genre::all();
    return view('genre.index', compact('genres'));
  }

  public function create()
  {
    return view('genre.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama' => 'required|string|max:255',
    ]);

    Genre::create($request->all());

    return redirect()->route('genre.index')
      ->with('success', 'Genre berhasil ditambahkan');
  }

  public function show($id)
  {
    $genre = Genre::with('films')->findOrFail($id);
    return view('genre.show', compact('genre'));
  }

  public function edit($id)
  {
    $genre = Genre::findOrFail($id);
    return view('genre.edit', compact('genre'));
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'nama' => 'required|string|max:255',
    ]);
    $genre = Genre::findOrFail($id);
    $genre->update($request->all());

    return redirect()->route('genre.index')
      ->with('success', 'Genre berhasil diperbarui');
  }

  public function destroy($id)
  {
    $genre = Genre::findOrFail($id);
    $genre->delete();

    return redirect()->route('genre.index')
      ->with('success', 'Genre berhasil dihapus');
  }

  public function __construct()
  {
    $this->middleware('auth')->except(['show', 'index']);
  }
}
