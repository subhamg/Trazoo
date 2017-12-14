<?php

namespace App\Http\Controllers;

use App\User;
use App\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;


class AdminController extends Controller
{
    //
    public function getAllUsers(Request $request){


//        $user = USER::where('role',"user")->get();
//        $user = USER::with('Business')->where('role',"user")->get();

        $user = DB::table('users')
            ->join('businesses', 'users.id', '=', 'businesses.user_id')
            ->select('users.*',
                'businesses.businessname',
                'businesses.businesstype',
                'businesses.industry',
                'businesses.addressline1',
                'businesses.addressline2',
                'businesses.landmark',
                'businesses.city',
                'businesses.pincode',
                'businesses.state',
                'businesses.bank',
                'businesses.accountholdername',
                'businesses.accountnumber',
                'businesses.ifsccode',
                'businesses.pannumber',
                'businesses.gstcompliance',
                'businesses.gstin',
                'businesses.vat')
            ->where('users.role','user')
            ->where('users.isBlocked',false)
            ->get();

//        $user =     DB::table('users')
//            ->join('businesses', 'users.id', '=', 'businesses.user_id')
//            ->select(
//                'businesses.businessname',
//                'businesses.businesstype',
//                'businesses.industry',
//                'businesses.addressline1',
//                'businesses.addressline2',
//                'businesses.landmark',
//                'businesses.city',
//                'businesses.pincode',
//                'businesses.state',
//                'businesses.bank',
//                'businesses.accountholdername',
//                'businesses.accountnumber',
//                'businesses.ifsccode',
//                'businesses.pannumber',
//                'businesses.gstcompliance',
//                'businesses.gstin',
//                'businesses.vat',
//                'users.firstname',
//                'users.lastname',
//                'users.email',
//                'users.number'
//
//            )->get();
        error_log('Users are ------------>: ');
        error_log('Users are ------------>: ');
        error_log('Users are ------------>: ');
        if(count($user)>0){
            return view('Admin.userList')->with(array(
                'user'=>$user));
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
            error_log('User to be approved is : '+$user_id[0]);
            error_log('User to be approved is : '+$user_id[1]);
            error_log('--------------------------------------- ');

            \DB::table('users')->whereIn('id',$user_id)->update(['isApproved' => true]);

         return 1;
        }
    }


//            $user_id = $request->id;
//        error_log('--------------------------------------- ');
//        error_log('User to be approved is : '+$user_id);
//        error_log('--------------------------------------- ');
//
//        $user = User::findorfail($user_id);
//        $user->isApproved = true;
//        $user->save();
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


            error_log('--------------------------------------- ');
            error_log('User to be approved is : '+$user_id[0]);
            error_log('User to be approved is : '+$user_id[1]);
            error_log('--------------------------------------- ');

            \DB::table('users')->whereIn('id',$user_id)->update(['isBlocked' => true]);


            return 1;
        }
    }
}
