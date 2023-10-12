<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //tao doi tuowng cuar model
        $obj =new Customer();
        //goi den fun trong model
        $Customer =$obj->index();
        return view('Customer.index',[
            'Customer'=>$Customer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $obj = new Customer();
        $obj->name=$request->name;
        $obj->password =$request->password;
        $obj->email =$request->email;
        $obj->phone= $request->phone;
        //
        $obj->store();
        // quay vef hien thi danh sach
        return Redirect::route('Customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer, Request $request)
    {
        //tao dois tuong
        $obj= new Customer();
        //lay du lieu tren id
        $obj->id = $request->id;
        //goi den fun trong model
        $customer = $obj->eidt();

        return view( 'Customer.edit',[
            'Customers' =>$customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $obj =new Customer();
        $obj->id =$request->id;
        $obj->name= $request->name;
        $obj->password =$request->password;
        $obj->email = $request->email;
        $obj->phone= $request->phone;
        $obj ->updateCustomer();
        //goi den fun updat
        return Redirect::route('Customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer, Request $request)
    {
        $obj = new Customer();
        $obj->id = $request ->id;
        $obj->destroyCustomer();
        return Redirect::route('Customer.index');
    }
    public function login(){
        return view('Customer.login');

    }

    public function loginProcess(Request $request){
        $accountCustomer = $request->only(['email', 'password']);

        if (Auth::guard('Customer')->attempt($accountCustomer)){
            $customer = Auth::guard('Customer')->user();
            Auth::login($customer);
            session(['Customer' => $customer]);
            return redirect()->route('Home.index');
        }
        else {
            return redirect()->back();
        }
    }
    public function logout()
    {
        // Xóa giỏ hàng
        session()->forget('cart');

        // Đăng xuất khỏi guard 'customer'
        Auth::guard('Customer')->logout();

        // Xóa session dành cho guard 'customer'
        session()->forget(Auth::guard('Customer')->getName());

        // Chuyển hướng đến trang đăng nhập
        return redirect()->route('Customer.login');
    }
}
