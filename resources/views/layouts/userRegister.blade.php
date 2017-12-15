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
    {{--<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/custom.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/filter.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/prettify.min.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
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
                    <ul class="nav navbar-nav navbar-center">
                        <!-- Authentication Links -->

                        <li>Create Trazoo account</li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                            <li><a href="{{ route('login') }}">Login</a></li>

                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    @yield('script')

    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/fastclick.js') }}"></script>--}}
    {{--<script src="{{ asset('js/nprogress.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/jquery.hotkeys.js') }}"></script>--}}
    {{--<script src="{{ asset('js/prettify.js') }}"></script>--}}

</body>
</html>
