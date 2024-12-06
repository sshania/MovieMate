<?php

namespace Database\Factories;

use App\Models\Seat;
use App\Models\Showtime;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id')->toArray();
        $showtimeIds = Showtime::pluck('id')->toArray();
        $seatIds = Seat::pluck('id')->toArray();

        $randomUserID = Arr::random($userIds);
        $randomShowtimeID = Arr::random($showtimeIds);
        $randomSeatID = Arr::random($seatIds);

        $randPrice = random_int(45000, 90000);
        return [
            //
            'user_id' => $randomUserID,
            'showtime_id' => $randomShowtimeID,
            'seat_id' => $randomSeatID,
            'price' => $randPrice,
        ];
    }
}
