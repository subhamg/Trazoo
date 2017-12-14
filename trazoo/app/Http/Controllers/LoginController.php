<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            'email' => $request -> email,
            'password' => $request -> password,
            'role'=>'admin'
        ])){
            $user = USER::where('email',$request->email)->first();
            if($user->is_admin()){
                return redirect()->route('adminDashboard');
            }
//            Auth::logout();
//            return redirect('/login');
        }
        return redirect() -> back()->with('message', 'Invalid Username or Password..!!');;
    }

public function logout(){
    Auth::logout();
    Session::flush();
    return redirect::route("/admin/login");
}
}
