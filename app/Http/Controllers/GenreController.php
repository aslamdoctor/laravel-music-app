<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGenre;
use App\Http\Requests\UpdateGenre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genre.index', [
            'genres' => $genres
        ]);
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(StoreGenre $request)
    {
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();

        $request->session()->flash('status', 'Created successful!');
        return redirect("/genre");
    }

    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show', [
            'genre' => $genre
        ]);
    }

    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', [
            'genre' => $genre
        ]);
    }

    public function update(UpdateGenre $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->name = $request->name;
        $genre->description = $request->description;
        $genre->save();

        $request->session()->flash('status', 'Updated successful!');
        return redirect("/genre");
    }

    public function destroy($id, Request $request)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        $request->session()->flash('status', 'Deleted successful!');
        return redirect("/genre");
    }
}
