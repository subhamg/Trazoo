<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
//use Illuminate\Support\Facades\Auth;
use Auth;
use App\User;
use Illuminate\Auth\Events\Registered;

class BusinessController extends Controller
{
    /**public function myform(){
        return view('newUserRegistration');
    }*/

    public function myformPost(Request $request){
        // $this->validator($request->all())->validate();

          $validator = Validator::make($request->all(), [
            'businessname' => 'required|string|max:255',
            'businesstype' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'addressline1' => 'required|string|max:255',
            'addressline2'  => 'required|string|max:255',
            'landmark'  => 'required|string|max:255',
            'city'  => 'required|string|max:255',
            'pincode'  => 'required|digits:6|max:11',
            'state'  => 'required|string|max:255',
            'bank'  => 'required|string|max:255',
            'accountholdername'  => 'required|string|max:255',
            'accountnumber'  => 'required|string|max:34',
            'ifsccode'  => 'required|string|max:255',
            'pannumber'  => 'required|string|max:255',
            'gstcompliance'  => 'required|string|max:5',
            'gstin'  => 'required|string|max:255',
            'vat'  => 'required|string|max:255',
        ]);

            error_log('--------------------------------------- ');
             error_log('User to be approved is : ');
        error_log('--------------------------------------- ' );


            $business = new business();
            $business->businessname = $request->input('businessname');
            $business->businesstype = $request->input('businesstype');
            $business->industry = $request->input('industry');
            $business->addressline1 = $request->input('addressline1');
            $business->addressline2 = $request->input('addressline2');
            $business->landmark = $request->input('landmark');
            $business->city = $request->input('city');
            $business->pincode = $request->input('pincode');
            $business->state = $request->input('state');
            $business->bank = $request->input('bank');
            $business->accountholdername = $request->input('accountholdername');
            $business->accountnumber = $request->input('accountnumber');
            $business->ifsccode = $request->input('ifsccode');
            $business->pannumber = $request->input('pannumber');
            $business->gstcompliance = $request->input('gstcompliance');
            $business->gstin = $request->input('gstin');
            $business->vat = $request->input('vat');
            $business->user_id = Auth::user()->id;
          
            $business->save();


        //event(new Registered($user = $this->create($request->all())));

//        $this->guard()->login($user);

          // if ($validator->fails()){
          //   return redirect()->back()->withErrors($validator)->withInput();
          // }
          // else {
          //   return $this->registered($request, $user)
          //   ?: redirect('registered');
          // }


return redirect('/home');

        

        /**return $this->registered($request, $business)
            ?: redirect('UserRegistration');*/
}


}

