<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function nowPlaying()
    {
        $today = Carbon::today();
        $movieNow = Movie::with('showtimes')->whereHas('showtimes', function($query) use($today) {
            $query->whereDate('showtime', '<=', $today);
        })->where('release_date', '<=', $today)->paginate(8);

        return view('main.now-playing', compact('movieNow'));
    }

    public function upcoming()
    {
        $today = Carbon::today();
        $movieUp = Movie::with('showtimes')->where('release_date', '>', $today)->paginate(8);

        return view('main.upcoming', compact('movieUp'));
    }

    public function findByID($id){
        $movie = Movie::findOrFail($id);
        return view('main/movie-detail', compact('movie'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $today = Carbon::today();

    $movieCarousel = Movie::with('showtimes')->whereHas('showtimes', function($query) use($today) {
        $query->whereDate('showtime', '<=', $today);
    })->limit(5)->get();

    $movieNow = Movie::with('showtimes')->whereHas('showtimes', function($query) use($today) {
        $query->whereDate('showtime', '<=', $today);
    })->where('release_date', '<=', $today)->paginate(8);

    $movieUp = Movie::with('showtimes')->where('release_date', '>' , $today)->get();

    $initialUpcomingMovies = $movieUp->take(4); // Get first 4 upcoming movies
    $remainingUpcomingMovies = $movieUp->slice(4); // Get remaining movies

    return view('main/home', [
        'movieCarousel' => $movieCarousel,
        'movieNow' => $movieNow,
        'initialUpcomingMovies' => $initialUpcomingMovies,
        'remainingUpcomingMovies' => $remainingUpcomingMovies,
    ]);
}


    public function booking(){
        $today = Carbon::today();

        $movieNow = Movie::with('showtimes')->whereHas('showtimes', function($query) use($today){
            $query->whereDate('showtime', '<=', $today);
        })->paginate(8);

        return view('main/booking', ['movieNow' => $movieNow]);
    }

    public function adminIndex(){
        $movies = Movie::get();
        return view('admin.movie.index', ['movieList' => $movies]);
    }

    public function adminShow($id){
        $movie = Movie::findOrFail($id);
        return view('admin.movie.detail', ['movieDetail'=>$movie]);
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
            'release_date' => 'required|date',
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
            'release_date' => $request->release_date,
            'movie_images' => 'poster'.$imagePath,
        ]);

        return redirect()->back()->with('success', 'Movie has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $movie = Movie::find($id);

            if (!$movie) {
                return response()->json([
                    'message' => 'Movie not found',
                ], 404);
            }

            return view('main.detail', [
                'movie' => $movie
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $movie = Movie::findOrFail($id);
        return view('admin/movie/edit', ['movieData' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
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
            'release_date' => 'required|date',
            'movie_images' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        $oldMovie = Movie::findOrFail($id);
        $oldMovie->update($request->all());

        $imagePath = time().'.' .$request->movie_images->extension();
        $request->movie_images->move(public_path('poster'), $imagePath);

        return redirect(route('movie.index'))->with([
            'status' => 'success',
            'message' => 'Movie berhasil di update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $oldMovie = Movie::findOrFail($id);
        $oldMovie->delete();

        return redirect(route('movie.index'))->with([
            'status' => 'success',
            'message' => 'Movie berhasil di hapus',
        ]);
    }
}
