<?php

namespace App\Http\Controllers;

use App\Models\BookingDetail;
use App\Http\Requests\StoreBookingDetailRequest;
use App\Http\Requests\UpdateBookingDetailRequest;
use App\Models\BookingSchedule;

class BookingDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new BookingDetail();
        //goi fun o mode de lay du lieu
        $bookingdetails =$obj ->index();

        return view('BookingDetail.index',[
            'bookingdetails' => $bookingdetails
        ]);
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
    public function store(StoreBookingDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingDetailRequest $request, BookingDetail $bookingDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingDetail $bookingDetail)
    {
        //
    }
}
