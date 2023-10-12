<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    use Authenticatable;
    protected $fillable = ['email','password'];
    public $timestamps = false;
    protected $table = 'employees';

    public function index(){
        //Query laays duwx lieue

        $Employees = DB::table('employees' )->get();
        // trả về dữ liệu
        return $Employees;
    }

    public function store(){
        DB::table('employees')
            ->insert([
                'name' =>$this->name,
                'password' =>$this->password,
                'email' =>$this->email,
                'address' =>$this->address,
                'role' =>$this->role



            ]);



    }
// tao fun lay duw leu theo id
    public function edit(){
        $Employee = DB::table('employees')->where('id',$this->id)
            ->get();
// tra ve du lieu
        return $Employee;
    }
// fun update du liwu
    public function updateEmployee(){
        //queri updat leen
        DB::table('employees')
            ->where('id', $this->id)
            ->update([
                'name' =>$this->name,
                'password' => $this->password,
                'email' =>$this->email,
                'address' =>$this->address,
                'role' =>$this->role
            ]);
    }
    //fun xoa ban ghi
    public function destroyEmployee(){
        // query buil der xoa ban ghi theo d
        DB::table('employees')
            ->where ('id', $this->id)
            ->delete();

    }

}
