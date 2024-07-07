<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;

class FilmController extends Controller
{
  public function index()
  {
    $films = Film::with('genre')->get();
    return view('film.index', compact('films'));
  }

  public function create()
  {
    $genres = Genre::all();
    return view('film.create', compact('genres'));
  }

  public function store(Request $request)
  {
    $request->validate([
      'judul' => 'required',
      'ringkasan' => 'required',
      'tahun' => 'required|integer',
      'poster' => 'required',
      'genre_id' => 'required|exists:genre,id',
    ]);

    Film::create($request->all());

    return redirect()->route('film.index')
      ->with('success', 'Film berhasil ditambahkan');
  }

  public function show($id)
  {
    $film = Film::with('genre')->findOrFail($id);
    return view('film.show', compact('film'));
  }

  public function edit($id)
  {
    $film = Film::findOrFail($id);
    $genres = Genre::all();
    return view('film.edit', compact('film', 'genres'));
  }

  public function update(Request $request, $id)
  {
    $request->validate([
      'judul' => 'required',
      'ringkasan' => 'required',
      'tahun' => 'required|integer',
      'poster' => 'required',
      'genre_id' => 'required|exists:genre,id',
    ]);
    $film = Film::findOrFail($id);
    $film->update($request->all());

    return redirect()->route('film.index')
      ->with('success', 'Film berhasil diperbarui');
  }

  public function destroy($id)
  {
    $film = Film::findOrFail($id);
    $film->delete();

    return redirect()->route('film.index')
      ->with('success', 'Film berhasil dihapus');
  }

  public function __construct()
  {
    $this->middleware('auth')->except(['show', 'index']);
  }
}
