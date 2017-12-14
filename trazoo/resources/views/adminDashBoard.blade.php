@extends('layouts.adminNav')

@section('content')




            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main" style="min-height: 498px;">
                <div class="">

                    <div class="clearfix"></div>


                    <div class="x_content">


                        <ul class="tab-top-head">
                            <li class="active"><a href="#">New Orders</a></li>
                            <li><a href="#">Pending Approval</a></li>
                            <li><a href="#">Ship Ready</a></li>
                            <li><a href="#">Shipped</a></li>
                            <li><a href="#">Delivered</a></li>
                            <li><a href="#">Closed Orders</a></li>
                            <li><a href="#">Canceled Orders</a></li>
                            <li><a href="#">All</a></li>
                        </ul>
                        <div class="table-responsive">
                            <table class="table  jambo_table bulk_action tab-bold-head">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title"></th>
                                    <th class="column-title"></th>
                                    <th class="column-title">Order No </th>
                                    <th class="column-title">Product</th>
                                    <th class="column-title">Quantity</th>
                                    <th class="column-title">Weight (Kg) </th>
                                    <th class="column-title">Shipping Charge </th>
                                    <th class="column-title">Amount (INR) </th>
                                    <th class="column-title">MOP </th>
                                    <th class="column-title">DOR </th>
                                    <th class="column-title">Seller ID </th>
                                    <th class="column-title">Buyer name </th>
                                    <th class="column-title">Pick up Address </th>
                                    <th class="column-title">Seller Phone </th>
                                    <th class="column-title">Buyer ID</th>
                                    <th class="column-title">Buyer Name</th>
                                    <th class="column-title">Delivery Address</th>
                                    <th class="column-title">Buyer Phone </th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr class="even">
                                    <td class=" ">
                                        <label class="checkbox-wp">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td class=" ">1</td>
                                    <td class=" ">50987 </td>
                                    <td class=" ">SF Jeans 2417</td>
                                    <td class=" ">40</td>
                                    <td class=" ">50</td>
                                    <td class=" ">5,000</td>
                                    <td class=" ">1,00,000</td>
                                    <td class=" ">Online</td>
                                    <td class=" ">20.10.17 </td>
                                    <td class=" ">228900</td>
                                    <td class=" ">Reeshav Shrivastava</td>
                                    <td class=" ">664, Chawdi Bazar, Ludhiana, Punjab 781021</td>
                                    <td class=" ">020 66521209</td>
                                    <td class=" ">228900</td>
                                    <td class=" ">Reeshav Shrivastava</td>
                                    <td class=" ">64, Chawdi Bazar, Ludhiana, Punjab 781021</td>
                                    <td class=" ">020 66521209</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- /footer content -->

    <!-- /compose -->

    <!-- jQuery -->


    {{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/fastclick.js') }}"></script>--}}
    {{--<script src="{{ asset('js/nprogress.js') }}"></script>--}}
    {{--<script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>--}}
    {{--<script src="{{ asset('js/jquery.hotkeys.js') }}"></script>--}}
    {{--<script src="{{ asset('js/prettify.js') }}"></script>--}}

@endsection
