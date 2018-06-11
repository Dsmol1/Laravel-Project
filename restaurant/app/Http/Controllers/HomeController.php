<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Countries;
use App\Main;
use App\Dish;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mains = Main::all();
      $dishes = Dish::all();
      return view('welcome', compact('mains', 'dishes'));
    }

    // public function mains(Request $request, Main $mains)
    // {
    //   $mains = Main::all();
    //   compact('mains');
    // }
}
