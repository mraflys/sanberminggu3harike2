<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function register(Request $request){
        return view('register');
    }
    public function welcome(Request $request){
        $Frist = $request["nama_depan"];
        $last = $request["nama_belakang"];
        return view('welcome',compact('Frist','last'));
    }
}
