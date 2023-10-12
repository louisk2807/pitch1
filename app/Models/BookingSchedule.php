<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookingSchedule extends Model
{
    use HasFactory;

    public function index(){

        $bookingschedule = DB::table('booking_schedules')
            ->join('employees', 'booking_schedules.employee_id', '=','employees.id',)
            ->join('customers','booking_schedules.customer_id', '=', 'customers.id')
            ->select(['booking_schedules.*',
                'employees.name AS employee',
                'customers.name AS customerName'
            ])
            ->get();
        return $bookingschedule;
    }

    public function store(){
        DB::table('booking_schedules')
            ->insert([
                'price'=> $this->price,
                'payment'=> $this->payment,
                'status'=> $this->status,
                'employee_id'=> $this->employee_id,
                'customer_id'=> $this->customer_id
            ]);
    }
    public function edit(){
        $bookingschedules = DB::table('booking_schedules')
            ->where('id', $this->id)
            ->get();
        //tra ve du lieu
        return $bookingschedules;
    }
    public function updateBookingSchedule(){
        DB::table('booking_schedules')
            ->where('id', $this->id)
            ->update([
                'price'=> $this->price,
                'payment'=> $this->payment,
                'status'=> $this->status,
                'employee_id'=> $this->employee_id,
                'customer_id'=> $this->customer_id
            ]);
    }
    public function destroyBookingSchedule(){
        DB::table('booking_schedules')
            ->where('id', $this->id)
            ->delete();
    }

}
