<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\ColumnResult;

class Service extends Model
{
    use HasFactory;
    protected $table = "services";


    public function index(){
        // laays du lieu
        $Service = DB::table('services')->get();
        //tra ve du lieu
        return $Service;



    }
    // fun luw du lieu dc them db
    public function store(){
        //qury bulider de lu du lieu
        DB::table('services')
            ->insert([
                'name'=> $this->name,
                'price'=> $this->price
            ]);
    }
    public function edit(){
        $Service = DB::table('Services')
            ->where('id', $this->id)
            -> get();

        // tra ve du lieu da lay
        return $Service;
    }
    // fun updat
    public function updateService(){
        DB::table('services')
            ->where('id', $this->id)
            ->update([
                'name' =>$this->name,
                'price' =>$this->price
            ]);
    }
    public function destroyService(){
        DB::table('services')
            ->where('id', $this->id)
            ->delete();
    }
}
