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
        return view('admin.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|in:SU,R 13+,D 17+',
            'duration' => 'required|integer',
            'genre' => 'required|string|max:255',
            'producer' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'writer' => 'required|string|max:255',
            'production_house' => 'required|string|max:255',
            'casts' => 'required|string',
            'description' => 'required|string',
            'movie_images' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $imagePath = time().'.' .$request->movie_images->extension();
        $request->movie_images->move(public_path('poster'), $imagePath);

        Movie::create([
            'title' => $request->title,
            'rating' => $request->rating,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'producer' => $request->producer,
            'director' => $request->director,
            'writer' => $request->writer,
            'production_house' => $request->production_house,
            'casts' => $request->casts,
            'description' => $request->description,
            'movie_images' => 'poster'.$imagePath,
        ]);

        return redirect()->back()->with('success', 'Movie has been added!');
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
