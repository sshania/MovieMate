<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $today = Carbon::today();

        $movieCarousel = Movie::with('showtimes')->whereHas('showtimes', function($query) use($today){
            $query->whereDate('showtime', $today);
        })->limit(5)->get();
        
        $movieNow = Movie::with('showtimes')->whereHas('showtimes', function($query) use($today){
            $query->whereDate('showtime', $today);
        })->paginate(8);

        $movieUp = Movie::with('showtimes')->where('release_date', '>' , $today)->paginate(8);

        // yg diatas pke 'showtimes' buat cek data bener apa kgaa, klo dh aman nanti pke yg bawah aja
        // $movieNow = Movie::whereHas('showtimes', function($query) use($today){
        //     $query->whereDate('showtime', $today);
        // })->get();
        // $movieUp = Movie::where('release_date', '>' , $today)->get();

        return view('main/home', ['movieCarousel' => $movieCarousel, 'movieNow' => $movieNow, 'movieUp' => $movieUp]);
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
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
