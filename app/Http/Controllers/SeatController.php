<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Showtime;
use App\Models\Studio;
use App\Models\Ticket;
use App\Models\Booking;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function findByStID($id){
        $showtime = Showtime::findOrFail($id);
        $studio = $showtime->studio;

        $tickets = Ticket::where('showtime_id', $id)->get();
        $occupiedSeats = $tickets->pluck('seat_id')->toArray();

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
        return view('seats.seats');
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

        $seat = $request->input('seat_number');
        $total = $request->input('sub_total');
        // dd($seat);
        // dd($total);

        try {
            Seat::create([
                'studio_id' => 1,
                'seat_number' => $seat,
                'sub_total' => $total
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        try {
            Booking::create([
                'user_id' => 1,
                'movie_id' => 1,
                'cinema_id' => 1,
                'showtime_id' =>  1,
                'chosen_seat' => $seat,
                'total_price' => $total,
                'payment_status' => false,
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    // public function showSeats(Request $request)
    // {
    //     $cinemaId = $request->input('cinema_id');
    //     $showtimeHour = $request->input('showtime_hour');

    //     $seats = Seat::where('cinema_id', $cinemaId)
    //                 ->where('showtime_hour', $showtimeHour)
    //                 ->get();

    //     return view('seats', ['seats' => $seats]);
    // }


    /**
     * Display the specified resource.
     */
    public function show(Seat $seat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seat $seat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seat $seat)
    {
        //
    }
}
