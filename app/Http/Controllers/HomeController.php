<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clearance;
use App\Application;
use App\Admission;
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
        //checks if user is admited

        if( Admission::where('user_id', Auth::id())->count() ){
           
           return redirect('profile');
        }

        $data['application'] = Application::where('user_id', Auth::id())->count();
        $data['clearance']   = Clearance::where('user_id', Auth::id())->count();

        return view('home', $data);
    }
}
