<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    public function findByMovieID($id){
        // $movie = Movie::with(['showtimes' => function($query) {
        //     $query->where('showtime', '>', Carbon::now());
        // }, 'showtimes.studio.cinema'])
        // ->findOrFail($id);

        $movie = Movie::with('showtimes')
        ->findOrFail($id);

        $groupedByCinema = $movie->showtimes->groupBy(function($showtime) {
            return $showtime->studio->cinema->name;
        });

        return view('main/movie-showtime', compact('movie', 'groupedByCinema'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Showtime $showtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showtime $showtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Showtime $showtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Showtime $showtime)
    {
        //
    }
}
