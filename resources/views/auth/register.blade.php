@extends('layouts.userRegister')
@section('content')
    <div class="backgroundColorRegister">
        <div class="divPositionNewRegister">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }} required">
                    <label for="firstname" class="col-md-offset-2 inputLabel">First Name</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="firstname" type="text" class="form-control" name="firstname" placeholder="Enter your first name" value="{{ old('lastname') }}" autofocus>

                        @if ($errors->has('firstname'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} required">
                    <label for="lastname" class="col-md-offset-2 inputLabel">Last Name</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Enter your last name" value="{{ old('lastname') }}"  autofocus>

                        @if ($errors->has('lastname'))
                            <span class="help-block errorText">
                                        This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }} required">
                    <label for="number" class="col-md-offset-2 inputLabel">Phone Number</label>

                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group">
                        <input id="number" type="number" class="form-control" name="number" value="{{ old('number') }}"  autofocus
                        >
                        <span class="input-group-btn" >
        <button class="btn btn-secondary" type="button" style="background-color: #2350f5; color: #fff" >Send OTP</button>
      </span></div>

                        @if ($errors->has('number'))
                            <span class="help-block errorText">
                                      {{ $errors->first('number') }}
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('otp') ? ' has-error' : '' }} required">
                    <label for="otp" class="col-md-offset-2 inputLabel">OTP</label>

                    <div class="col-md-8 col-md-offset-2" style="display: inline; ">
                        <input id="otp" type="text" class="form-control col-xs-2" style="display: inline; width: 10%; margin-right: 13px;border: solid 1px #d7d7e1" name="otp" maxlength="4" value="{{ old('otp') }}" >
                        <input id="otp" type="text" class="form-control col-2"   style="display: inline; width: 10%; margin-right: 11px; border: solid 1px #d7d7e1"  name="otp" maxlength="4" value="{{ old('otp') }}" >

<input id="otp" type="text" class="form-control col-2" style="display: inline; width: 10%; margin-right: 10px; border: solid 1px #d7d7e1" name="otp" maxlength="4" value="{{ old('otp') }}" >

<input id="otp" type="text" class="form-control col-2" style="display: inline; width: 10%;  border: solid 1px #d7d7e1;margin-right: 10px;" name="otp" maxlength="4" value="{{ old('otp') }}" >


                        @if ($errors->has('otp'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} required">
                    <label for="password" class="col-md-offset-2 inputLabel">Password</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="password" onKeyPress="showlength()"  onKeyUp="showlength()"  type="password" class="inputWithButton" name="password" >
                        <button type="button" class="buttonAfterInput" style="background-color: #f6f8fd; border: solid 1px #d7d7e1" id="showhide"  onclick="showOrHide()">Show</button>

                        @if ($errors->has('password'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>

                    <div class="col-md-1" id="passwordStrength" style="padding-left: 0px;padding-top: 5px">

                    </div>
                </div>

                <div class="form-group required">
                    <label for="password-confirm" class="col-md-offset-2 inputLabel">Confirm Password</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-8">
                        <button type="submit" class="btn btn-primary" style="background-color:#2350f5; border: none; ">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script>

 function showlength(){
            var length =  document.getElementById('password').value;
            var change = document.getElementById('passwordStrength');

            if(length.length>6){
                change.innerHTML = "Good";
                change.style.color = "orange"
            }
            if(length.length<3){
                change.innerHTML = "Weak";
                change.style.color = "red"

            }
            if(length.length>8){
                change.innerHTML = "Strong";
                change.style.color = "green"

            }
        }     


        function showOrHide(){
            var change = document.getElementById('showhide');
            console.log("change.innerHTML : "+change.innerHTML);
            if(change.innerHTML == "Show"){
                change.innerHTML = "Hide";
                $("#password").prop('type','text');
            }
            else{
                change.innerHTML = "Show";
                $("#password").prop('type', 'password');
            }
        }


    </script>
@endsection

