<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Pitch;
use App\Models\PitchType;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    public function index()
    {
        $obj = new Home();
        $homes = $obj->index();
        $obj = new PitchType();
        $pitchTypes = $obj->index();
        $obj = new Pitch();
        $Pitchs = $obj->index();
        $obj = new Service();
        $Services = $obj->index();
        return view('Home.index', ['homes'=>$homes,
            'pitchTypes'=>$pitchTypes,
            'Pitchs' =>$Pitchs,
            'services' =>$Services,

        ]);
    }

    public function booking(){
        return view('Home.booking');
    }

    public function store(Request $request)
    {
        //
        $obj = new Home();
        $obj->pitchType_id = $request->pitchType_id;
        $obj->start_time = $request->check_in;
        $obj->end_time = $request->check_out;
        $obj->payment = $request->paymentmethod;
        //Gọi function để lưu dữ liệu lên db trong model
        $obj->store();
        //quay veef route hiển thị danh sách
        return Redirect::route('Home.index');
    }

}
