<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    //
    public function getAllUsers(Request $request){
        $user = USER::where('role',"user")->get();
        error_log('Users are : ');
        if(count($user)>0){
            return view('Admin.userList')->with(array('user'=>$user));
        }
    }

    public function approveUser(Request $request){

        $rules = array(
            'id' => 'required'
        );

        $validator = Validator::make(Input::all(),$rules);
        if($validator -> fails()){
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        else{
        $user_id = $request->id;
        error_log('--------------------------------------- ');
        error_log('User to be approved is : '+$user_id);
        error_log('--------------------------------------- ');

        $user = User::findorfail($user_id);
        $user->isApproved = true;
        $user->save();

        return 1;
        }
    }

    public function blockUnbockUser(Request $request){

        $rules = array(
            'id' => 'required'
        );

        $validator = Validator::make(Input::all(),$rules);
        if($validator -> fails()){
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }
        else{
            $user_id = $request->id;

            $user = User::findorfail($user_id);
            $isBlocked = $user->isBlocked;
            if($isBlocked == true){
                $user->isBlocked = false;
                error_log('User Unblocked');
            }
            else{
                $user->isBlocked = true;
                error_log('User Blocked');
            }
            $user->save();

            return 1;
        }
    }
}
