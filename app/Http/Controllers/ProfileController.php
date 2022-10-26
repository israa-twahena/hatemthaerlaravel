<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
//    public function __construct() {
////        $this->middleware('auth');
//    }
//    public function contact ($age=null) {
//        $data = [];
//        $data['name'] = 'mohammed';
//        $data['age'] = $age;
////        $name = 'mohammed';
////        $age = 25;
////        return view('welcome')->with(['name' => $name]);
////        $x = __('website.welcome');
////        dd($x);
//        return view('welcome', compact('data'));
//    }

    public function __construct() {
//        $this->middleware('auth');
    }

    public function test() {
        return view('test');
    }

    public function password($pass=null) {
        $data = [];
        $data['name'] = "thaer";
        $data['pass'] = $pass;
        return view('test', compact('data'));
    }

    public function contact() {
        return view('test');
    }
    public function test2($x=null) {
        $data = [];
        $data['a'] = Null;
        $data['b'] = 'ahmed';

        return view('test2', compact('data','x'));
    }
}
