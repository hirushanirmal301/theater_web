<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class moviecreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create_movie');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request -> validate([

            'title' => 'required|string|max:100',
            'description' => 'nullable|string|max:225',
            'duration' => 'required',
            'release_date' => 'required',
            'language' => 'required',
            'genre' => 'required',
            'rating' => 'nullable',
            'poster' => 'required',
            'price' => 'required',
            // 'showtimes1' => 'nullable',
            // 'showtimes2' => 'nullable',
            // 'showtimes3' => 'nullable',
            // 'showtimes4' => 'nullable',

        ]);

        $movie = Movie::create([
            'title' => $validate['title'],
            'description' => $validate['description'],
            'duration' => $validate['duration'],
            'release_date' => $validate['release_date'],
            'genre' => $validate['genre'],
            'rating' => $validate['rating'],
            'poster' => $validate['poster'],
            'price' => $validate['price']
        ]);

        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
