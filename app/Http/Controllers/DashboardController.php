<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
{
    public function index()
    {   
        if(isset(Auth::user()->email)){
            return view("welcome")->with("user_", Auth::user()->email);
        } else {
            return redirect("login")->with("error", "Please Login in first");
        }
        
    }
}
