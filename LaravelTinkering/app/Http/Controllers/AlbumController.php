<?php
namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
class AlbumController extends Controller
{
    public function index()
    {
        $albums = album::all();
        return view('albums.index', compact('albums'));
    }
    public function create()
    {
        return view('albums.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'singer' => 'required',
            'year' => 'required',
            'songs' => 'required',

        ]);
        album::create($request->all());
        return redirect()->route('albums.index')->with('success', 'Album created successfully.');
    }
    public function show(album $album)
    {
        return view('albums.show', compact('album'));
    }
    public function edit(album $album)
    {
        return view('albums.edit', compact('album'));
    }
    public function update(Request $request, album $album)
    {
        $request->validate([
            'title' => 'required',
            'singer' => 'required',
            'year' => 'required',
            'songs' => 'required',
        ]);
        $album->update($request->all());

        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }
    public function destroy(album $album)
    {
        $album->delete();
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }
}
