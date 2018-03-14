<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index() {
        $albums = Album::with('Photos')->get();
        return view('albums.index',compact('albums'));
    }

    public function create() {
        return view('albums.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'image|max:1999',
            
        ]);
            //get file name + extensiion
        $filenameExt = $request->file('cover_image')->getClientOriginalName();
        //get just file name
        $filename = pathinfo($filenameExt, PATHINFO_FILENAME);
        //get just extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        //create new file name with timestamp
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        //store image
        $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);
        //create album
        $album = new Album;
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;
        $album->save();
        return redirect('/albums')->with('success', 'Album created');
    }

    public function show($id) {
        $album = Album::with('Photos')->find($id);
        return view('albums.show', compact('album'));
    }
}
