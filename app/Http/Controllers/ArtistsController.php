<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{

    public function index()
    {
        $artists = Artist::all()->sortBy('name');
        return view("artists", ['artists' => $artists]);
    }
    //
    public function show($slug)
    {
        $artist = Artist::where('slug', $slug)->firstOrFail();
        return view("artist_view", ['artist' => $artist]);
    }
}
