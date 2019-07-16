<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FormController extends Controller
{
    //
    public function view(Request $request){
        $data = null;
        $value = $request->input('value');
        if($value){
            $data = $data = DB::table('sinhvien')->where('id', '=', $value)->get();
            return view('form',['data'=>$data[0]]);
        }
        return view('form',['data'=>$data]);
    }
    
    public function add(Request $request){
        $value = $request->input('value');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $usename = $request->input('usename');
        $email = $request->input('email');
        $state = $request->input('state');
        if($value){
            $data = DB::table('sinhvien')
        ->where('id', $value)
        ->update([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'usename'=>$usename,
            'email'=>$email,
            'state'=>$state
            ]);
        }else{
        $data = DB::table('sinhvien')
        ->insert([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'usename'=>$usename,
            'email'=>$email,
            'state'=>$state
        ]);
        }
        // dd($value);
        return redirect()->route('index');
    }
    public function delete(Request $request){
        $value = $request->input('value');
        // dd($value);
        $data = DB::table('sinhvien')->where('id', '=', $value)->delete();
        return redirect()->route('index');
    }
    
}
