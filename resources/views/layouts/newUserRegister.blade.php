<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Trazoo') }}</title>--}}
    <title> Trazoo </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{--<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/custom.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/filter.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/prettify.min.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
     <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>

.form-control {
    border: solid 1px #d7d7e1
}
    .navbar{
        margin-bottom: 0px !important;
    }

    .navbar-default {
        background-color: white;
    }
    
    
    .fa-stack {
        font-size: 13px; 
        color: #d7d7e1; 
        margin-top: -2%;
    }
    
     .navbar-nav .active a::after {
  border-bottom: 2px solid #2350f5;
  bottom: 5%;
  content: " ";
  left: 0;
  position: absolute;
  right: 0;
  background-color: transparent;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       Trazoo
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-center" style="padding-top: 0px;">
                        <!-- Authentication Links -->

                        <li class="nav-item active">
                            <a class="nav-link" style="background-color: transparent;" href="#">
                            <span id="icon_1" class="fa-stack" >
                                <i class="fa fa-circle fa-stack-2x" ></i>
                                <i class="fa fa-inverse fa-stack-1x" >1</i>
                                </span>
                            <span id="iconCheck_1" class="fa-stack" style="display: none;" >
                                <i class="fa fa-circle fa-stack-2x" style="color: #4eba41" ></i>
                                <i class="fa fa-inverse fa-stack-1x" > &#10004; </i>
                                 </span>
                            Business Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="background-color: transparent;" href="#">
                            <span id="icon_2" class="fa-stack"  >
                                <i class="fa fa-circle fa-stack-2x" ></i>
                                <i class="fa fa-inverse fa-stack-1x">2</i>
                                </span>
                                <span id="iconCheck_2" class="fa-stack" style="display: none;" >
                                <i class="fa fa-circle fa-stack-2x" style="color: #4eba41" ></i>
                                <i class="fa fa-inverse fa-stack-1x" > &#10004;</i>

                            </span>
                            Pick Up Address</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="background-color: transparent;" href="#">
                            <span  id="icon_3" class="fa-stack"  >
                                <i class="fa fa-circle fa-stack-2x" ></i>
                                <i class="fa fa-inverse fa-stack-1x">3</i>
                                </span>
                                <span  id="iconCheck_3" class="fa-stack" style="display: none;" >
                                <i class="fa fa-circle fa-stack-2x" style="color: #4eba41" ></i>
                                <i class="fa fa-inverse fa-stack-1x" > &#10004;</i>

                            </span>
                            Payment Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="background-color: transparent;" href="#">
                            <span id="icon_4" class="fa-stack"  >
                                <i class="fa fa-circle fa-stack-2x" ></i>
                                <i class="fa fa-inverse fa-stack-1x" >4</i>
                                </span>
                                <span id="iconCheck_4" class="fa-stack" style="display: none;" >
                                <i class="fa fa-circle fa-stack-2x"  ></i>
                                <i class="fa fa-inverse fa-stack-1x" > &#10004;</i>

                            </span>
                            Buisness &amp; KYC Info</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                   <!-- <ul class="nav navbar-nav navbar-right">
                        
                            <li><a href="{{ route('login') }}">Login</a></li>

                    </ul>-->
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->    @yield('script')

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>

    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/fastclick.js') }}"></script>--}}
    {{--<script src="{{ asset('js/nprogress.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/jquery.hotkeys.js') }}"></script>--}}
    {{--<script src="{{ asset('js/prettify.js') }}"></script>--}}

</body>
</html>
