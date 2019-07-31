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
    public function  reserveunit($unit){

        $units = DB::table('Unit')->where('id',$unit)->first();
        $types = DB::table('types')->where('id',$units->id_type)->first();
        
        
        return view('reserve.reserve', ['unit' => $units],['types' => $types]);
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
        
         $affected = DB::update('update Unit set status = 1 where id = ?', [request()->id_unit]);

            return redirect(route('reserve'));

    }

    public function checkstatus($type){

        $unit = DB::table('Unit')->where('id_type',$type)->get();
        $types = DB::table('types')->where('id', $type)->first();

        return view('status.checkstatus',['types' => $types],['unit' => $unit]);
    }

    public function  detail($id){
        $reserve = DB::table('reserves')->where('id_unit',$id)->first();
        $units = DB::table('Unit')->where('id',$reserve->id_unit)->first();
        $types = DB::table('types')->where('id',$units->id_type)->first();

        return view('reserve.detail',['types' => $types,'unit' => $units,'reserve' => $reserve]);
    }


}
