<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\ListaLekow;
use App\User;
use App\Apteczka;

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
        return view('home');
    }
}
