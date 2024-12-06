<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use App\Models\User;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Showtime;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'movie', 'cinema', 'showtime'])->get();
        // return view('admin.booking.index');
        return view('admin.booking.index', compact('bookings'));
    }

    // public function adminIndex(){
    //     $bookings = Booking::get();
    //     return view('admin.booking.index', ['movieList' => $movies]);
    // }


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'movie_id' => 'required|exists:movies,id',
            'cinema_id' => 'required|exists:cinemas,id',
            'showtime_id' => 'required|exists:showtimes,id',
            'chosen_seat' => 'required|string',
            'total_price' => 'required|string',
        ]);

        $booking = Booking::create([
            'user_id' => $request->user_id,
            'movie_id' => $request->movie_id,
            'cinema_id' => $request->cinema_id,
            'showtime_id' => $request->showtime_id,
            'chosen_seat' => $request->chosen_seat,
            'total_price' => $request->total_price,
            'payment_status' => false,
        ]);

        return response()->json(['message' => 'Booking created successfully', 'booking' => $booking], 201);
    }

    public function create()
    {
        return view('admin.booking.create', [
            'users' => User::all(),
            'movies' => Movie::all(),
            'cinemas' => Cinema::all(),

            'showtimes' => Showtime::all(),
        ]);
    }


    public function updatePaymentStatus(Request $request)
    {
        $bookingId = $request->input('booking_id');

        $booking = Booking::find($bookingId);

        if ($booking) {
            $booking->payment_status = true;
            $booking->save();

            return redirect()->route('payment.success')->with('message', 'Payment successful!');
        }

        return redirect()->route('payment.failed')->with('message', 'Booking not found.');
    }
    
    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update([
            'payment_status' => $request->payment_status, // Only update payment status
        ]);

        return response()->json(['message' => 'Booking updated successfully', 'booking' => $booking]);
    }
}
