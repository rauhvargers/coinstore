<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{

    /**
     * Returns a full list of artists.
     * Will it work when there are 15'000 artists in the database? I seriously doubt...
     */
    public function index()
    {
        $artists = Artist::all()->sortBy('name');
        return view("artists", ['artists' => $artists]);
    }

    /**
     * Returns a single artist, identified by URL substring
     *
     * @param  string $slug The URL substring after the main route name /artists/
     * @return
     */
    public function show(string $slug)
    {
        $artist = Artist::where('slug', $slug)->firstOrFail();
        return view("artist_view", ['artist' => $artist]);
    }

    /**
     * create
     *
     * @return
     */
    public function create()
    {
        return view("artist_add");
    }


    public function store(Request $request)
    {
                $rules = array(
            'name' => 'required|min:2|max:191',
            'slug' => 'required|alpha_dash|min:3|max:191',
            'description' => 'string|nullable'
        );

        $validated = $this->validate($request, $rules);

        $artist = new Artist();
        $artist->name = $validated["name"];
        $artist->slug = $validated["slug"];
        $artist->bio = $validated["description"];

        $artist->save();

        return redirect("/artists");
    }

    //user wants to edit an artist.
    //Find the artist item in DB and return a form for editing
    public function edit(string $slug) {
        $artist = Artist::where('slug', $slug)->firstOrFail();
        return view("artist_edit", ['artist' => $artist]);
    }

    public function update(Request $request, string $slug){

        $artist = Artist::where('slug', $slug)->firstOrFail();


        $rules = array(
            'name' => 'required|min:2|max:191',
            'slug' => 'required|alpha_dash|min:3|max:191',
            'description' => 'string|nullable'
        );

        $validated = $this->validate($request, $rules);
        $artist->name = $validated["name"];
        $artist->slug = $validated["slug"];
        $artist->bio = $validated["description"];

        $artist->save();

        return redirect("/artists");


    }


}
