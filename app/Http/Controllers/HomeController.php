<?php

namespace App\Http\Controllers;
use Auth;
use App\Ad;
use App\Category;
use App\Region;
use session;
use App\User;
use Image;

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
        $ads = Ad::whereUserId(auth()->user()->id)->get();
        return view('home')->with('ads',$ads);
    }
}
