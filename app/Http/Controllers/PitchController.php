<?php

namespace App\Http\Controllers;

use App\Models\Pitch;
use App\Http\Requests\StorePitchRequest;
use App\Http\Requests\UpdatePitchRequest;
use App\Models\PitchType;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

class PitchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj =new Pitch();
        //goi fun owr model de lay duw lieu
        $Pitch =$obj ->index();
        return view('Pitch.index',[
            'Pitch' => $Pitch
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objPitchTypes = new PitchType();
        $PitchType = $objPitchTypes->index();
        return view('Pitch.create',[
            'PitchType'=> $PitchType
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\StorePitchRequest $request
     * @return  \Illuminate\Http\Response
     */
    public function store(StorePitchRequest $request)
    {
        //tao doi tuowng
        $obj = new Pitch();
        // lay du lieu vaf gans vaof thuoc tinh\
        $obj->name = $request->name ;

        $obj ->freeTime = $request->freeTime ;
        $obj->PType_id = $request->PType_id ;
        // goi den fun trong model luw du lieu
        $obj->store();
        // quay vee danh sachs
        return Redirect::route('Pitch.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pitch $pitch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pitch $pitch, Request $request)
    {
        //tạo đối tượng
        $objPitchType = new PitchType();
        //gọi fun lấy Pitchtype
        $PitchTypes = $objPitchType->index();
        //tao obj cuar pit
        $objPitch = new Pitch();
        //lay id cuar pitc ddc sua gan vaof id cuar objh
        $objPitch->id= $request->id;
// gọi fun model để lấy thông tin của pit theo id vừa lấy
        $pitchs = $objPitch ->edit();
        return view('Pitch.edit',[
            'PitchType'=> $PitchTypes,
            'pitchs'=> $pitchs,
            'id' => $objPitch->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePitchRequest $request, Pitch $pitch)
    {
        $obj = new Pitch();
        $obj->id =$request->id;
        $obj->name= $request->name;

        $obj->freeTime = $request->freeTime;
        $obj->PType_id = $request->PType_id ;
        $obj ->updatePitch();
        //goi den fun updat
        return Redirect::route('Pitch.index') ;

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pitch $pitch , Request $request)
    {
        $obj= new Pitch();
        $obj->id= $request->id;
        $obj->destroyPitch();
        return Redirect::route('Pitch.index');
    }
}
