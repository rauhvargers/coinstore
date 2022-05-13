<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request as ClientRequest;

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
        //the Artists controller is not strictly bound to the Artist model
        //so we call validation: is the current user allowed to perform "create" operation on Artist(model) objects?
        // Laravel searches for a policy on the Artist model and calls the ArtistPolicy->create authorization function.
        $this->authorize("create", Artist::class);
        return view("artist_add");

    }



    public function store(Request $request)
    {
        //simple check if the user is authorized at all, no policies applied
        if (!Auth::check()) return "Not allowed!";

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
    public function edit(string $slug)
    {
        if (Auth::check()) {
            $artist = Artist::where('slug', $slug)->firstOrFail();
            return view("artist_edit", ['artist' => $artist]);
        } else {
            return "Not allowed here!";
        }
    }

    public function update(Request $request, string $slug)
    {

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
