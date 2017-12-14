@extends('layouts.userRegister')
@section('content')
    <div class="backgroundColorRegister">
        <div class="divPositionRegister">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label for="firstname" class="col-md-offset-2 inputLabel">FirstName</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('lastname') }}" autofocus>

                        @if ($errors->has('firstname'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label for="lastname" class="col-md-offset-2 inputLabel">LastName</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"  autofocus>

                        @if ($errors->has('lastname'))
                            <span class="help-block errorText">
                                        This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                    <label for="number" class="col-md-offset-2 inputLabel">Phone Number</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="number" type="number" class="form-control" name="number" value="{{ old('number') }}"  autofocus>

                        @if ($errors->has('number'))
                            <span class="help-block errorText">
                                      {{ $errors->first('number') }}
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-offset-2 inputLabel">E-Mail Address</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

                        @if ($errors->has('email'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-offset-2 inputLabel">Password</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="password" onKeyPress="showlength()"  onKeyUp="showlength()"  type="password" class="inputWithButton" name="password" >
                        <button type="button" class="buttonAfterInput" id="showhide"  onclick="showOrHide()">Show</button>

                        @if ($errors->has('password'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>

                    <div class="col-md-1" id="passwordStrength" style="padding-left: 0px;padding-top: 5px">

                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-offset-2 inputLabel">Confirm Password</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-8">
                        <button type="submit" class="btn btn-primary">
                            Register
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

