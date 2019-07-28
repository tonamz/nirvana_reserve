<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Type;
use App\Reserve;

class ReserveController extends Controller
{
    public function  reserve($type){
   

        $types = DB::table('types')->where('id', $type)->first();
        $unit = DB::table('Unit')->where('status','0')->where('id_type',$type)->get();
        return view('reserve.reserve', ['types' => $types],['unit' => $unit]);
    }

    public function  store(){

        $reserve = Reserve::create(
            [

        'id_unit' => request()->id_unit,
        'price'=> request()->price, 
        'firstname'=> request()->firstname, 
        'lastname'=> request()->lastname, 
        'telephone'=> request()->telephone, 
        'address'=> request()->address
                
            ]);

            return redirect(route('reserve'));

    }
}
