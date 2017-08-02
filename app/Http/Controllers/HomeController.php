<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function userList()
    {
        // Get the currently authenticated user...
        $user = Auth::user()->toArray();

        // Get the currently authenticated user's ID...
        $id = Auth::id();

        dd($user, $id);
    }

}
