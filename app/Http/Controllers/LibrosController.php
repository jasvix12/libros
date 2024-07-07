<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index()
    {
        $libros = libros::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $libro = new libros();
        $libro->titulo = $request->titulo;
        $libro->ISBN = $request->ISBN;
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();

        return redirect()->route('libros.index');
    }

    public function show(string $id)
    {
        $libro = libros::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    public function edit(string $id)
    {
        $libro = libros::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, string $id)
    {
        $libro = libros::findOrFail($id);
        $libro->titulo = $request->titulo;
        $libro->ISBN = $request->ISBN;
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();

        return redirect()->route('libros.index');
    }

    public function destroy(string $id)
    {
        $libro = libros::findOrFail($id);
        $libro->delete();
        return redirect()->route('libros.index');  
    }
}
