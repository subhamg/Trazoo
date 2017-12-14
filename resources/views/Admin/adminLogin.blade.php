@extends('layouts.userLogin')


@section('content')
     <div class="backgroundColor">
        <div class="col-md-1 titleOnTopLeft">
            Trazoo
        </div>
        <div class="divPosition">
            <div class="loginPanelHeading">
                Welcome to Trazoo
                <div>Admin</div>
            </div>

            <div class="col-md-10 col-md-offset-1 textBelowLoginPanelHeading">
                Find buyers to connect with, add them to your network and do much more from right there.
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('admin.login') }}">
                {{ csrf_field() }}
                <div class="col-md-10 col-md-offset-1">
                    @if (session('message'))
                        <div class="alert alert-warning">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-offset-2 inputLabel">Email ID</label>


                    <div class="col-md-8 col-md-offset-2">
                        <input id="email" type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-md-10 forgotPassoword">    <label for="password" class="col-md-offset-2 inputLabel">Password</label>
                        <a class="linkColor" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-2 aligntoLeft">
                    <div class="checkbox">
                        <input class="" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="aligntoLeft">
                            Remember Me
                        </label>
                    </div>
                </div>



                <div class="col-md-8 col-md-offset-2 buttonSurrounding">
                    <button type="submit" class="buttonFeatures">
                        Sign In
                    </button>
                </div>

            </form>

        </div>
    </div>
@endsection

