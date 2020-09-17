<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

use App\Models\User;


use Validator;

use Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function loginPage()
    {
        return view("login");
    }
    public function signUpPage()
    {
        return view("signup");
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => "required|email",
            'password' => 'required|alphaNum|min:4',
            'name'  => "required"
        ]);

        $user = [
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'password' => Hash::make($request->get('password')),
            'remember_token' => Str::random(40)
        ];

        if (User::create($user))
        {
            return redirect("login")->with("state", $user['name']." has been registered successfully..Please proceed to <b>Log-In</b>");
        }
        else 
        {
            return back()->with("error", "Sign-Up Failed Due to some issues");
        }

    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => "required|email",
            'password' => 'required|alphaNum|min:4'
        ]);

        $user = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($user))
        {
            return redirect("dashboard");
        }
        else 
        {
            return back()->with("error", "Wrong Details");
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect("home");
    }
}
