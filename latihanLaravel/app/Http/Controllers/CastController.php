<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required'
        ]);

        Cast::create($request->all());

        return redirect()->route('cast.index')
            ->with('success', 'Pemain film berhasil ditambahkan');
    }

    public function show(Cast $cast)
    {
        return view('cast.show', compact('cast'));
    }

    public function edit(Cast $cast)
    {
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, Cast $cast)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'bio' => 'required'
        ]);

        $cast->update($request->all());

        return redirect()->route('cast.index')
            ->with('success', 'Data pemain film berhasil diperbarui');
    }

    public function destroy(Cast $cast)
    {
        $cast->delete();

        return redirect()->route('cast.index')
            ->with('success', 'Pemain film berhasil dihapus');
    }
}
