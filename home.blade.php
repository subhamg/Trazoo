<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>Trazoo</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/trazoo.css') }} " rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        body {
            background-color: #f7f9fa;
        }

        .main_menu_side {
            padding-top: 50px;

            font-family: OpenSans;
            font-size: 12px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;

        }

        .nav.side-menu > li > a {
            color: #0a0a14;
            margin-bottom: 0px;
        }

        .menu_section > ul {
            margin-top: 0px;
        }

        .glyphicon {
            padding-right: 5px;
        }

        .main_menu .fa {
            width: 20px;
            font-size: 14px;
        }

        .container > ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .container > ul > li {
            float: right;
        }

        .container > ul > li a {
            display: block;
            color: white;
            text-align: center;

            padding-top: 14px;
            padding-right: 24px;
            padding-bottom: 14px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            text-overflow: ellipsis;
            line-height: 27.5px;
        }

        .search {
            display: block;
            color: white;
            text-align: center;

            margin-top: 14px;
            margin-right: 24px;
            margin-bottom: 14px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            text-overflow: ellipsis;
            line-height: 25.5px;
            border-radius: 4px;

        }

        input[type=text] {
            border: 0px solid rgba(10, 10, 20, 0.2);
            height: 31px;

        }

        .search button {
            border: 0px solid rgba(10, 10, 20, 0.2);
            height: 31px;
            margin-right: 2px;
        }

        .searchTerm, .searchButton {
            background-color: rgba(10, 10, 20, 0.2);
            border: none;

            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.11);
        }

        .site_title {
            text-overflow: ellipsis;
            overflow: hidden;
            font-weight: 600;
            font-size: 13px;
            width: 100%;
            color: #fff !important;
            margin-left: 0 !important;
            line-height: 27.5px;
            display: block;
            height: 55px;
            margin: 0;
            padding-left: 24px;

        }

        .glyphicon {
            top: 0px;
        }

        input[type="text"]::-webkit-input-placeholder {
            color: rgba(255, 255, 255, .5);

        }

        .nav .side-menu {
            width: 150px;
        }

        .card {
            width: 244px;
            max-height: 300px;
            border-radius: 6px;
            background-color: #ffffff;
            border: solid 1px #e9edf8;
            display: inline;
            float: left;
            margin-right: 32px;
            margin-bottom: 32px;
        }

        .card img {
            width: 100%;
            padding-left: 6px;
            padding-right: 6px

        }

        .card-image {
            width: 244px;
            height: 172px;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
        }

        .card-body {
            width: 100%;
            height: 128px;
        }

        .card-content {
            width: 100%;
            height: 84px;
        }

        .card-setting {
            width: 100%;
            height: 44px;
            padding-top: 10px;
        }

        .card-title {
            width: 288px;
            height: 11px;
            font-family: OpenSans;
            font-size: 13px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: 0.85;
            letter-spacing: normal;
            text-align: left;
            color: #0a0a14;
            padding: 12px;

        }

        .layer {
            width: 49px;
            height: 11px;
            font-family: OpenSans;
            font-size: 12px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: 0.92;
            letter-spacing: normal;
            text-align: left;
            color: #73737d;
            padding-left: 12px;
        }

        .card .price {
            width: 24px;
            height: 19px;
            font-family: OpenSans;
            font-size: 14px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #000000;
            padding-left: 12px;
            display: inline;
            padding-bottom: 12px;
        }

        .margin {
            width: 76px;
            height: 17px;
            font-family: OpenSans;
            font-size: 12px;
            font-weight: 600;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #55be4b;
            display: inline;
            padding-left: 6px;
            padding-bottom: 13px;
        }

        .MOQ-Peices {
            width: 180px;
            height: 15px;
            font-family: OpenSans;
            font-size: 11px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #000000;
            padding-left: 12px;
            padding-bottom: 18px;
            display: inline;
        }

        hr {
            margin-top: 13px;
            margin-bottom: 0;
        }

        .catalogue-title {
            width: 85px;
            height: 24px;
            font-family: OpenSans;
            font-size: 18px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #0a0a14;
            display: inline;
            float: left;
            padding-top: 18px;
        }

        .product {
            width: 150px;
            height: 17px;
            font-family: OpenSans;
            font-size: 12px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #73737d;
            display: inline;
            float: left;
            padding-top: 23px;
            padding-left: 15px;

        }

        .working .glyphicon-th-large {
            color: #2350f5;

        }

        .working {
            color: #2350f5;
            border-left: 2px solid #2350f5;

        }

        .Rectangle-15 {
            width: 1072px;
            height: 644px;
            border-radius: 6px;
            background-color: #ffffff;
            border: solid 1px #e9edf8;
        }


        .Screen-Shot-2017-12-25-at-33958-PM {
            width: 156px;
            height: 181px;
            margin:58px 454px 0px 462px;
            background-image: url("{{asset('images/flag.png')}}");
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .Welcome-Rimpy{
            font-family: OpenSans;
            font-size: 24px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: center;
            color: #0a0a14;
        }


        .Lets-get-you-started{
            font-family: OpenSans;
            font-size: 12px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.5;
            letter-spacing: normal;
            text-align: center;
            color: #73737d;
        }

        .Home{
            padding-top:25px;
            font-family: OpenSans;
            font-size: 18px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #0a0a14;
        }

        .homeCard{
            width: 341px;
            height: 300px;
            border-radius: 6px;
            background-color: #ffffff;
            border: solid 1px #e9edf8;
        }

    </style>


</head>

<body class="nav-md">
<nav class="navbar navbar-default navbar-fixed-top"
     style="background-color: #234bbe; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.11);">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Trazoo</a>-->
        <ul>
            <li style="float:left"><a href="index.html" class="site_title">Trazoo </a></li>


            <li class="">
                <a href="javascript:;" class="user-profile " aria-expanded="false">
                    <img src="{{ asset('images/img.jpg') }}" alt="">
                </a>

            </li>
            <li><a href=""><i class="fa fa-question-circle-o"></i> Help</a></li>
            <li><a href="">
                    <button type="button" class="btn btn-primary btn-sm"
                            style="background-color:#234bbe; border: 1px solid #fff;">Add Product
                    </button>
                </a></li>
            <li><span class="search"><span class="inner-addon left-addon">
    <span class="glyphicon glyphicon-search"
          style="background-color:rgba(10, 10, 20, 0.2);  height: 31px; padding-left:5px;padding-bottom: 7.5px; padding-top: 7.5px; margin-right:-3px;"></span>
    <input type="text" placeholder="Search People" style="background-color:rgba(10, 10, 20, 0.2);"/>
</span>

            </li>


        </ul>


    </div>
</nav>


<div class="container-fluid" style="padding-left: 0px; paadding-right:0px;">
    <div class="row">
        <div class="col-md-2" style="background-color: #f7f9fa;">
            <div class="left_col scroll-view" style="background-color: #f7f9fa;">


                <div class="clearfix"></div>

                <!-- /menu profile quick info -->

                <br>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a href=""><span class="glyphicon glyphicon-home"></span> Home </a></li>
                            <li><a href=""><span class="glyphicon glyphicon-list-alt"></span> Inventory</a></li>
                            <li><a href=""> <i class="fa fa-rupee"></i>Sales </a></li>
                            <li><a href="{{ route('getAllUsers') }}"><span class="glyphicon glyphicon-list"></span>
                                    Orders</a></li>
                            <li class="working"><a href="" style="color: #2350f5;"><span
                                            class="glyphicon glyphicon-th-large"></span> Catalogue </a></li>
                            <li><a href=""> <i class="fa fa-share-alt"></i>Connections </a></li>
                            <li><a href=""><i class="fa fa-ticket"></i>Coupons </a></li>
                            <li><a href=""><i class="fa fa-pencil-square-o"></i>Queries </a></li>

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
            </div>
        </div>


            @yield('content')
    </div>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('js/prettify.js') }}"></script>
@yield('script')

<!-- Scripts -->


</body>
</html>
