<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // tạo đối tượng của model
        $obj= new Service();
        //gọi đến fun index trong model để lấy du
        $Service =$obj->index();
        //tả về view và gửi theo dữ liệu
        return view('Service.index',[
            'Service' => $Service


        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // goi dem view
        return view('Service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        // tao doi tuong moi
        $obj =new Service();
        // lay du liwu
        $obj->name = $request->name;
        $obj->price = $request->price;
        // goij fun der luw du lieu trn model
        $obj->store();
        //quay ve route hienthi
        return Redirect::route('Service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service, Request $request)
    {

        $obj = new Service();
        $obj ->id = $request->id;
        $service = $obj->edit();

        return view('Service.edit',[
            'Service' =>$service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $obj = new Service();
        $obj ->id= $request->id;
        $obj->name = $request->name;
        $obj->price = $request->price;
        //goi funupdate model
        $obj->updateService();
        return Redirect::route('Service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service, Request $request)

    {
        $obj = new Service();
        $obj->id = $request->id;
        $obj->destroyService();
        return Redirect::route('Service.index');
    }
}
