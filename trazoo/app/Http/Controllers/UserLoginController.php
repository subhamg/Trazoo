<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Session;
use Illuminate\Http\Request;
class UserLoginController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            'email' => $request -> email,
            'password' => $request -> password,
            'role'=>'user'
        ])){
            $user = USER::where('email',$request->email)->first();

            if($user->is_notApproved()){
                Auth::logout();
                Session::flush();
                return redirect() -> back()->with('message', 'Your can login after your account has been approved by admin.!!');
            }

            if($user->is_blocked()){
                Auth::logout();
                Session::flush();
                return redirect() -> back()->with('message', 'Your Account has been blocked..Please Contact the admin!!');
            }

            if($user->is_user()){
                return redirect()->route('home');
            }
        }
        return redirect() -> back()->with('message', 'Invalid Username or Password..!!');
    }
}
