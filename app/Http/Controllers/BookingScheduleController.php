<?php

namespace App\Http\Controllers;

use App\Models\BookingSchedule;


use App\Http\Requests\StoreBookingScheduleRequest;
use App\Http\Requests\UpdateBookingScheduleRequest;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BookingScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obj = new BookingSchedule();
        //goi fun o mode de lay du lieu
        $bookingschedules =$obj ->index();
        $objbookingdetails = new BookingDetail();
        $objbookingdetails->id = $request->id;
        $bookingdetails = $objbookingdetails ->index();
        return view('BookingSchedule.index',[
            'bookingschedules' => $bookingschedules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objEmployees =new Employee();
        $objCustomers =new Customer();
        $Employee =$objEmployees->index();
        $Customer =$objCustomers->index();
        return view('BookingSchedule.create',[
            'Employee'=> $Employee,
            'Customer'=>$Customer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingScheduleRequest $request)
    {
        $obj =new BookingSchedule();
        $obj->price = $request->price;
        $obj ->payment = $request->payment;
        $obj ->status = $request->status;
        $obj ->employee_id =$request->employee_id;
        $obj ->customer_id = $request->customer_id;
        $obj ->store();
        return Redirect::route('BookingSchedule.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingSchedule $bookingSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookingSchedule $bookingSchedule , Request $request)
    {
        //tạo đối tượng
        $objEmployee =new Employee();
        $objCustomer =new Customer();
        //gọi fun lấy .........
        $Employees =$objEmployee->index();
        $Customers =$objCustomer->index();
        //tao obj cuar booking
        $objBookingSchedule =new BookingSchedule();
        //lay id cuar bookingsche ddc sua gan vaof id cuar objh
        $objBookingSchedule->id = $request->id;
        // gọi fun model để lấy thông tin của bookingsche theo id vừa lấy
        $bookingschedules = $objBookingSchedule->edit();
        return view('BookingSchedule.edit',[
            'Employee'=> $Employees,
            'Customer'=> $Customers,
            'bookingschedules'=>$bookingschedules,
            'id' => $objBookingSchedule->id
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingScheduleRequest $request, BookingSchedule $bookingSchedule)
    {
        $obj = new BookingSchedule();
        $obj ->id =$request->id;
        $obj->price = $request->price;
        $obj ->payment = $request->payment;
        $obj ->status = $request->status;
        $obj ->employee_id =$request->employee_id;
        $obj ->customer_id = $request->customer_id;
        $obj ->updateBookingSchedule();
        //goi den fun updat
        return Redirect::route('BookingSchedule.index') ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookingSchedule $bookingSchedule, Request $request)

    {
        $obj= new BookingSchedule();
        $obj->id= $request->id;
        $obj->destroyBookingSchedule();
        return Redirect::route('BookingSchedule.index');
    }
    public function updateStatus($id)
    {
        $bookingschedule = BookingSchedule::find($id);

        if ($bookingschedule) {
            if ($bookingschedule->status == 0) {
                $bookingschedule->status = 1; // Đặt trạng thái thành đã duyệt
                $bookingschedule->save();
            } else {
                $bookingschedule->status = 0; // Đặt trạng thái thành đang chờ duyệt
                $bookingschedule->save();
            }
        }

        // Xử lý các tác vụ khác sau khi điều chỉnh trạng thái

        // Redirect hoặc trả về phản hồi cho người dùng
    }

}
