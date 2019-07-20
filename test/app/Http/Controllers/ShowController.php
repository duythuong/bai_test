<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShowController extends Controller
{
    //
    public function show(Request $request){
    	$value = $request->input('value');
    	$data = $data = DB::table('sinhvien')->where('id', '=', $value)->get();
            return view('layout_form',['data'=>$data[0],'type'=>false]);
    }
}
