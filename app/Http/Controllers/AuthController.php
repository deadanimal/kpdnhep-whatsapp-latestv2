<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function index()
    {
        return view('login2');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }
  
        return redirect("/login2")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("/dashboard")->withSuccess('You have signed-in');
    } 
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('/dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Auth::logout();
  
        return Redirect('login2');
    }
}