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

<style>
.adminDashBoard {
padding-left: 40%;
    padding-top: 20%;
    font-size: larger;
    font-weight: bolder;
}
</style>
</head>

<body class="nav-md">


    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title">Trazoo <span>Admin</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- /menu profile quick info -->

                    <br>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a> Orders </a></li>
                                <li><a> Products </a></li>
                                <li><a  href="{{ route('getAllUsers') }}"> Users </a></li>
                                <li><a> Push Notification </a></li>
                                <li><a> Banners and Cards </a></li>
                                <li><a> Return Requests </a></li>
                                <li><a> Payments </a></li>
                                <li><a> Ask Trazoo Queries </a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('images/img.jpg') }}" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="javascript:;"> Profile</a></li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li><a href="javascript:;">Help</a></li>
                                    <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                    </li>  </ul>
                            </li>

                            <li role="presentation" class="dropdown">

                                <div class="sort-by-btn marg-t10 marg-l10" id="filter-btn"><i class="fa fa-filter" aria-hidden="true"></i> Filter</div>


                                <div class="sorting-filter" id="filter-show">
                                    <div class="header-top">Filter By</div>
                                    <!-- required for floating -->
                                    <!-- Nav tabs -->
                                    <div class="main-warp">
                                        <ul class="nav nav-tabs tabs-left">
                                            <li class="active"><a href="#Mode-of-Payment" data-toggle="tab">Mode of Payment (2)</a></li>
                                            <li><a href="#Ratings" data-toggle="tab">Ratings</a></li>
                                            <li><a href="#Delivery-States" data-toggle="tab">Delivery States</a></li>
                                            <li><a href="#Product-Category" data-toggle="tab">Product Category</a></li>
                                        </ul><!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="Mode-of-Payment">
                                                <label class="checkbox-wp">Prepaid
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Net Banking
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">COD
                                                    <input checked="" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="tab-pane" id="Ratings">
                                                <div class="rating">Product Quality
                    <span>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                                                </div>
                                                <div class="rating">Service Quality
                    <span>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                                                </div>
                                                <div class="rating">Packaging
                    <span>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                                                </div>
                                                <div class="rating">Margin
                    <span>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                      <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="Delivery-States">
                                                <label class="checkbox-wp">Andhra Pradesh
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Arunachal Pradesh
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Assam
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Delivered
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Bihar
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Chhattisgarh
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Goa
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Gujarat
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Harayana
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Himachal Pradesh
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Jammu and Kashmir
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Jharkhand
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Karnataka
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Kerala
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Madhya Pradesh
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="tab-pane" id="Product-Category">
                                                <label class="checkbox-wp">Fashion and Accessories
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="checkbox-wp">Bags and Wallets
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="sub-cate">
                                                    <label class="checkbox-wp">Sarees
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox-wp">Blouse
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox-wp">Kurta and Kurtis
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox-wp">Sarees
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox-wp">Blouse
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="checkbox-wp">Kurta and Kurtis
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>

                                                <label class="checkbox-wp">Mobile and Accessories
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bot-footer text-center">
                                        <button type="button" class="btn-light-green-border">Clear All</button>
                                        <button type="button" class="btn-light-green">Apply</button>
                                    </div>

                                </div>
                            </li>
                        </ul>

                        <div class="top_search_warp">
                            <input type="text">
                            <span class="search_icon">
                              <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                        </div>

                    </nav>
                </div>
            </div>



            @yield('content')
        </div>

    </div>

    <script src="{{ asset('js/jquery.min.js') }}" ></script>
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
