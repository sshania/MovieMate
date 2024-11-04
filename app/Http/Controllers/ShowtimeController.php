<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowtimeCreateUpdateRequest;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Studio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShowtimeController extends Controller
{
    public function findByMovieID($id){
        $movie = Movie::with('showtimes')->findOrFail($id); ;
        $showtime = Showtime::with('cinema')->where('movie_id', $id)->get()->groupBy('cinema_id');
        
        return view('main/movie-showtime', compact('showtime', 'movie'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $showtimes = Showtime::get();
        return view('admin/showtime/index',['showtimeList' => $showtimes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $movies = Movie::get();
        $studios = Studio::get();
        return view('admin/showtime/create', ['movieList'=>$movies, 'studioList'=>$studios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShowtimeCreateUpdateRequest $request)
    {
        //
        $newShowtime = $request->all();

        $showtime = Showtime::create($newShowtime);
        if($showtime){
            Session::flash('status', 'success');
            Session::flash('message', 'add new Showtime success');
        }

        return redirect(route('showtime.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $showtime = Showtime::findOrFail($id);
        return view('admin/showtime/detail', ['showtimeDetail'=>$showtime]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $showtime = Showtime::findOrFail($id);
        $movies = Movie::get();
        $studios = Studio::get();

        return view('admin/showtime/edit', ['showtimeData'=>$showtime, 'movieList'=>$movies, 'studioList'=>$studios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShowtimeCreateUpdateRequest $request, $id)
    {
        //
        $oldShowtime = Showtime::findOrFail($id);
        $oldShowtime->update($request->all());

        return redirect(route('showtime.index'))->with([
            'status' => 'success',
            'message' => 'Showtime berhasil di update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $oldShowtime = Showtime::findOrFail($id);
        $oldShowtime->delete();

        return redirect(route('showtime.index'))->with([
            'status' => 'success',
            'message' => 'Showtime berhasil di hapus',
        ]);
    }
}
