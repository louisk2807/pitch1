<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookingDetail extends Model
{
    use HasFactory;
    public  function index(){
        $bookingdetail = DB::table('booking_details')

            ->join('pitches', 'booking_details.pitch_id', '=', 'pitches.id')

            ->select(['booking_details.*',

                'pitches.name AS pitch',


            ])
        ->get();
        return $bookingdetail;
    }
}
