<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArtist;
use App\Http\Requests\UpdateArtist;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', [
            'artists' => $artists
        ]);
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(StoreArtist $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->save();

        $request->session()->flash('status', 'Created successful!');
        return redirect("/artists");
    }

    public function show($id)
    {
        $artist = Artist::findOrFail($id);
        return view('artists.show', [
            'artist' => $artist
        ]);
    }

    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view('artists.edit', [
            'artist' => $artist
        ]);
    }

    public function update(UpdateArtist $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->name = $request->name;
        $artist->description = $request->description;
        $artist->save();

        $request->session()->flash('status', 'Updated successful!');
        return redirect("/artists");
    }

    public function destroy($id, Request $request)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        $request->session()->flash('status', 'Deleted successful!');
        return redirect("/artists");
    }
}
