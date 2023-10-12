<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PitchType extends Model
{
    use HasFactory;

    public function index(){
        $PitchType = DB::table('pitch_types')->get();
        return $PitchType;
    }
    public function store(){
        //qury bulider de lu du lieu
        DB::table('pitch_types')
            ->insert([
                'name'=> $this->name,

            ]);
    }
}

