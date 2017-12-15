@extends('layouts.userLogin')

@section('content')
    <div class="backgroundColor">
        <div class="col-md-1 titleOnTopLeft">
            Trazoo
        </div>
        <div class="divPosition">
            <div class="loginPanelHeading">
                Welcome to Trazoo
            </div>

            <div class="col-md-10 col-md-offset-1 textBelowLoginPanelHeading">
               Find buyers to connect with, add them to your network and do much more from right there.
            </div>

            <form class="form-horizontal" method="POST" action="{{ route('user.login') }}">
                {{ csrf_field() }}
                <div class="col-md-10 col-md-offset-1">
                    @if (session('message'))
                        <div class="alert alert-warning">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                   <label for="number" class="col-md-offset-2 inputLabel">Phone Number</label>


                    <div class="col-md-8 col-md-offset-2">
                        <input id="number" type="number" class="form-control" placeholder="Enter your phone number" name="number" value="{{ old('number') }}" required autofocus>

                        @if ($errors->has('number'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
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

                <div class="col-md-2 col-md-offset-5" style="text-align: center">
                    OR
                </div>

                                    <a class="linkColor" href="{{ route('register') }}">

                <div class="col-md-8 col-md-offset-2 buttonSurrounding">
                        <button type="button" class="buttonFeaturesRegister">
                            Create new User?
                        </button>
                   
                </div> </a>
            </form>

        </div>
    </div>

    {{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('user.login') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@if (session('message'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('message') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--<div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">--}}
                            {{--<label for="number" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="number" type="number" class="form-control" name="number" value="{{ old('number') }}" required autofocus>--}}

                                {{--@if ($errors->has('number'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('number') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
