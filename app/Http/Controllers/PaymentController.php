<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
    public function create(Request $request)
    {
        $movieId = $request->input('movie_id');
        $cinemaId = $request->input('cinema_id');
        $showtimeId = $request->input('showtime_id');
        // $bookingId  = Booking::findOrFail($id);
        // console.log("tes");
        return view('main.payment', compact('movieId', 'cinemaId', 'showtimeId'));
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
            $movieId = $request->input('movie_id');
            $cinemaId = $request->input('cinema_id');
            $showtimeId = $request->input('showtime_id');
            $booking = Booking::create([
                        'user_id' => 1,
                        'movie_id' => $request->movie_id,
                        'cinema_id' => $request->cinema_id,
                        'showtime_id' => $request->showtime_id,
                        // 'showtime_id' => 1,
                        'chosen_seat' => $seat,
                        'total_price' => $total,
                        'payment_status' => false,
                        ]);

        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        return view('main.payment', compact('movieId', 'cinemaId', 'showtimeId', 'booking'));
        // dd($request->all());
    }


    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        // console.log("Tes");
        $payment = Booking::findOrFail($id);
        $payment->update(['payment_status' => true]);
        // dd($payment);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
