<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServiceDetail extends Model
{
    use HasFactory;

    public  function  index(){
        $servicedetail = DB::table('service_details')
            ->join('services', 'service_details.service_id', '=', 'services.id')
            ->select(['service_details.*',
                'services.name AS service'
            ])
            ->get();
        return $servicedetail;
    }
}
