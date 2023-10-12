<?php

namespace App\Http\Controllers;

use App\Models\PitchType;
use App\Http\Requests\StorePitchTypeRequest;
use App\Http\Requests\UpdatePitchTypeRequest;

class PitchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obj = new PitchType();
        $PitchType = $obj->index();
        return view('PitchType.index',[
            'PitchType'=>$PitchType
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
    public function store(StorePitchTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PitchType $pitchType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PitchType $pitchType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePitchTypeRequest $request, PitchType $pitchType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PitchType $pitchType)
    {
        //
    }
}
