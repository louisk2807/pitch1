<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pitch extends Model
{
    use HasFactory;
    public function index()
    {    //Sử dụng query builder để lấy dữ liệu

        $Pitch = DB::table('pitches')
            ->join('pitch_types', 'pitches.pitchType_id', '=', 'pitch_types.id')
            ->select(['pitches.*',
                'pitch_types.name as pitch_type',
            ])

            ->get();

        //Trả về dữ liệu đã lấy được
        return $Pitch;
    }
    public function store (){
        DB::table('pitches')
            ->insert([
                'name'=> $this->name,

                'freeTime'=> $this->freeTime,
                'PType_id' => $this->PType_id
            ]);
    }
    public function edit(){
        $pitchs = DB::table('pitches')
            ->where('id',$this->id)
            ->get();
// tra ve du lieua
        return $pitchs;
    }
    public function updatePitch(){
        DB::table('pitches')
            ->where('id', $this->id)
            ->update([
                'name' =>$this->name,

                'freeTime'=> $this->freeTime,
                'PType_id'=> $this->PType_id
            ]);
    }
    public function destroyPitch(){
        DB::table('pitches')
            ->where('id', $this->id)
            ->delete();
    }
}
