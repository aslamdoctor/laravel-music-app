<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlbum;
use App\Http\Requests\UpdateAlbum;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', [
            'albums' => $albums
        ]);
    }

    public function create()
    {
        return view('albums.create');
    }

    public function store(StoreAlbum $request)
    {
        $album = new Album();
        $album->name = $request->name;
        $album->description = $request->description;
        $album->release_date = $request->release_date;
        $album->save();

        $request->session()->flash('status', 'Created successful!');
        return redirect("/albums");
    }

    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('albums.show', [
            'album' => $album
        ]);
    }

    public function edit($id)
    {
        $album = Album::findOrFail($id);
        return view('albums.edit', [
            'album' => $album
        ]);
    }

    public function update(UpdateAlbum $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->name = $request->name;
        $album->description = $request->description;
        $album->release_date = $request->release_date;
        $album->save();

        $request->session()->flash('status', 'Updated successful!');
        return redirect("/albums");
    }

    public function destroy($id, Request $request)
    {
        $album = Album::findOrFail($id);
        $album->delete();
        $request->session()->flash('status', 'Deleted successful!');
        return redirect("/albums");
    }
}
