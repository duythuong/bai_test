<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    //
    public function show(Request $request){
        
        $data = DB::table('sinhvien')->get();
        // dd($data[0]);
        return view('index',['data'=>$data]);
    }
}
