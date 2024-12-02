<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudioCreateUpdateRequest;
use App\Models\Cinema;
use App\Models\Showtime;
use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudioController extends Controller
{
    public function findSdByStID($id){
        $showtime = Showtime::findOrFail($id);
        $studio = Studio::with(['seats', 'seats.ticket' => function($query) use ($id) {
            $query->where('showtime_id', $id);
        }])->findOrFail($showtime->studio->id);
        
        $occupiedSeats = $studio->seats->pluck('tickets')->flatten()->where('showtime_id', $id)->pluck('seat_id')->toArray();
        
        $availableSeats = $studio->seats->filter(function ($seat) use ($occupiedSeats) {
            return !in_array($seat->id, $occupiedSeats);
        });

        return view('main/seats', compact('studio', 'availableSeats', 'showtime'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $studio = Studio::with('cinema')->get();
        return view('admin/studio/index', ['studioList'=>$studio]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cinemas = Cinema::get();
        return view('admin/studio/create', ['cinemaList'=>$cinemas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudioCreateUpdateRequest $request)
    {
        //
        $newStudio = $request->all();
        $newStudio['total_seats']=0;
        
        $cinema = Cinema::findOrFail($newStudio['cinema_id']);
        $cinema->total_studios += 1;
        $cinema->save();

        $studio = Studio::create($newStudio);
        if($studio){
            Session::flash('status', 'success');
            Session::flash('message', 'add new Studio success');
        }

        return redirect(route('studio.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $studio = Studio::findOrFail($id);
        return view('admin/studio/detail', ['studioDetail'=>$studio]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cinema = Cinema::get();
        $studio = Studio::findOrFail($id);
        return view('admin/studio/edit', ['studioData'=>$studio, 'cinemaList'=>$cinema]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudioCreateUpdateRequest $request, $id)
    {
        //
        $oldStudio = Studio::findOrFail($id);
        $oldStudio->update($request->all());
        
        return redirect(route('studio.index'))->with('message', 'Studio berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $oldStudio = Studio::findOrFail($id);

        $cinema = Cinema::findOrFail($oldStudio['cinema_id']);
        $cinema->total_studios -= 1;
        $cinema->save();

        $oldStudio->delete();

        return redirect(route('studio.index'))->with('message', 'Studio berhasil di delete');
    }
}
