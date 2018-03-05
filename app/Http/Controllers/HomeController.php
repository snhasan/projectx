<?php

namespace App\Http\Controllers;

use App\Client;
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
        if (Auth::user()->type == 'sales') {
            $clients = Client::where('Agent_ID', Auth::id())
//                ->where('Status','followup')
                ->get();

            return view('salesUI.salesHome')->with('clients', $clients);

        } elseif (Auth::user()->type == 'bd') {
            return view('BDExecutive.home.home');

        } elseif (Auth::user()->type == 'admin') {
            return view('admin.home.home');

        } else {
            return view('/home');

        }


    }
}
