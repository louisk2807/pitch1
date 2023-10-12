<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    use HasFactory;
     protected $table = "booking_details";

    public function index(){
        $bookingdetails = DB::table('booking_details')->get();
        return $bookingdetails;
    }

    public function store(){
        $email = session('Customer.email');

        $customer_id = DB::table('customers')->where('email', $email)->get('id');
        DB::table('booking_schedules')->insert([
            'status' => 0,
            'payment' => $this->payment,
            'employee_id' => 2,
            'customer_id' =>$customer_id[0]->id
        ]);
        $bookingSchedule_id = DB::table('booking_schedules')->where('customer_id', $customer_id[0]->id)->max('id');
        $pitchPrice = DB::table('pitch_types')->where('id', $this->pitchType_id)->get('price');

        DB::table('booking_details')->insert([
            'bookingSchedule_id' => $bookingSchedule_id,
            'pitch_id' => 2,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'service_detail_id'=> $this->service_detail_id,
            'price' => $pitchPrice[0]->price
        ]);
    }
}
