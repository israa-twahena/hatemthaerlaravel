<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where(['id'=>1])->get();
        $user2 = User::find(2);
        $user3 = User::where('id',1)->first();
        return view('home', compact('users','user2','user3'));
    }

    public function go() {
        //sdxdgds
        return view('go');
    }
}
