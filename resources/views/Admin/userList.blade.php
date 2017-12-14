@extends('layouts.adminNav')

@section('content')

            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>
                        <div  id="showApproveButton" >
                            <button  class="btn " style="margin-left: 10px;background-color: white;outline: 1px solid green"  onclick="approvePendingSellers()">
                                Approve Sellers
                            </button>
                        </div>
                    <div  id="showBlockButton" >
                        <button class="btn " style="margin-left: 10px;background-color: white;outline: 1px solid green" onclick="blockSellers()">
                            Block
                        </button>
                    </div>

                    <div class="x_content">


                        <ul class="tab-top-head" id="tab-top-head">
                            <li><a href="#">Buyers</a></li>
                            <li id="sellersList" class="active"  onclick="showSellers()"><a href="#">Sellers</a></li>
                            <li id="pendingSellersList" onclick="showPendingSellers()"><a href="#">Pending Sellers</a></li>
                            <li><a href="#">Blocked Users</a></li>
                        </ul>
                        <div class="table-responsive">
                            <table class="table  jambo_table bulk_action tab-bold-head">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title"></th>
                                    {{--<th class="column-title">Status</th>--}}
                                    {{--<th class="column-title">Block</th>--}}
                                    <th class="column-title">User ID</th>
                                    <th class="column-title">DOJ</th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title"  style="text-align: center">Email ID</th>
                                    <th class="column-title"  style="text-align: center">Phone Number</th>
                                    <th class="column-title">Business type</th>
                                    <th class="column-title">Product Category</th>
                                    <th class="column-title">Product Uploads</th>
                                    <th class="column-title">PickUp Address</th>
                                    <th class="column-title">Location</th>
                                    <th class="column-title">State</th>
                                    <th class="column-title">Total Orders</th>
                                    <th class="column-title">Gross Business</th>
                                    <th class="column-title">Last Active</th>



                                </tr>
                                </thead>
                                @foreach($user as $u )

                                <tbody>

                                @if($u->isApproved == 1)

                                <tr class="even approvedSellers" id="approvedSellerIds_{{$u->id}}" onclick="selectBlockSellers({{$u->id}})">
                                    <td class=" ">
                                        <div id="userId_{{$u->id}}">
                                        <label class="checkbox-wp  checktick">
                                            <input id="sellerIds_{{$u->id}}" type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    </td>

                                    {{--<td class=" ">--}}
                                        {{--<div class="hidden-div" id="hidden-div_{{$u->id}}">Approved</div>--}}
                                        {{--@if($u->isApproved != 1)--}}
                                            {{--<div  id="userId_{{$u->id}}" >--}}
                                                {{--<button onclick="approveUser({{$u->id}})">--}}
                                                    {{--Approve--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                            {{--@else--}}
                                            {{--Approved--}}
                                        {{--@endif--}}
                                    {{--</td>--}}

                                    {{--<td class=" ">--}}

                                            {{--<div>--}}
                                                {{--<button  class="blockId_{{$u->id}}"  id="blockId_{{$u->id}}"  onclick="blockOrUnblockUser({{$u->id}})">--}}
                                                    {{--@if($u->isBlocked == 1)--}}
                                                    {{--Unblock--}}
                                                        {{--@else--}}
                                                        {{--Block--}}
                                                    {{--@endif--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                    {{--</td>--}}

                                    <td class=" ">{{$u->id}}</td>
                                    <td class=" ">{{$u->created_at}}</td>
                                    <td class=" ">{{$u->firstname}} {{$u->lastname}}</td>
                                    <td class=" ">{{$u->email}}</td>
                                    <td class=" ">{{$u->number}}</td>
                                    <td class=" ">{{$u->businesstype}}</td>
                                    <td class=" ">Product</td>
                                    <td class=" ">uploads</td>
                                    <td class=" ">{{$u->addressline1}},{{$u->addressline2}},
                                        {{$u->landmark}}</td>
                                    <td class=" ">{{$u->city}}</td>
                                    <td class=" ">{{$u->state}}</td>
                                    <td class=" ">orders</td>
                                    <td class=" ">Business</td>
                                    <td class=" ">today</td>



                                </tr>
                                @endif

                                @if($u->isApproved == 0)

                                    <tr class="even pendingSellers" id="approvedIds_{{$u->id}}" onclick="selectPendingSeller({{$u->id}})">

                                        <td class=" ">
                                            <div id="userId_{{$u->id}}">
                                                <label class="checkbox-wp  checktick">
                                                    <input id="pendingSeller_{{$u->id}}" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </td>
                                        {{--<td class=" ">--}}
                                            {{--<div class="hidden-div" id="hidden-div_{{$u->id}}">Approved</div>--}}
                                            {{--@if($u->isApproved != 1)--}}
                                                {{--<div  id="userId_{{$u->id}}" >--}}
                                                    {{--<button onclick="approveUser({{$u->id}})">--}}
                                                        {{--Approve--}}
                                                    {{--</button>--}}
                                                {{--</div>--}}
                                            {{--@else--}}
                                                {{--Approved--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
                                        {{--<td class=" ">--}}
                                            {{--<div>--}}
                                                {{--<button  class="blockId_{{$u->id}}"  id="blockId_{{$u->id}}"  onclick="blockOrUnblockUser({{$u->id}})">--}}
                                                    {{--@if($u->isBlocked == 1)--}}
                                                        {{--Unblock--}}
                                                    {{--@else--}}
                                                        {{--Block--}}
                                                    {{--@endif--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                        <td class=" ">{{$u->id}}</td>
                                        <td class=" ">{{$u->created_at}}</td>
                                        <td class=" ">{{$u->firstname}} {{$u->lastname}}</td>
                                        <td class=" ">{{$u->email}}</td>
                                        <td class=" ">{{$u->number}}</td>
                                        <td class=" ">{{$u->businesstype}}</td>
                                        <td class=" ">Product</td>
                                        <td class=" ">uploads</td>
                                        <td class=" ">{{$u->addressline1}},{{$u->addressline2}},
                                            {{$u->landmark}}</td>
                                        <td class=" ">{{$u->city}}</td>
                                        <td class=" ">{{$u->state}}</td>
                                        <td class=" ">orders</td>
                                        <td class=" ">Business</td>
                                        <td class=" ">today</td>
                                    </tr>
                                @endif
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('script')


    <script>

        window.onload = function() {
            $('.pendingSellers').hide();
            $('#showApproveButton').hide();
            $('#showBlockButton').hide();

//            $('#approvedSellers').hide();
        };



        var user_id = [];
        var block_user_id = [];

        function selectPendingSeller(id){
            if($("#pendingSeller_"+id).prop('checked') == true){
                //do something
                $('#pendingSeller_'+id).prop('checked', false);

                console.log("this.user_id before removing : ");
                console.log("this.user_id before removing : "+this.user_id);

                this.user_id = jQuery.grep(this.user_id, function(value) {
                    return value != id;
                });


                console.log("this.user_id after removing: "+this.user_id);

                if(this.user_id.length == 0){
                    $('#showApproveButton').hide();
                    $('#tab-top-head').show();

                }


            }else{
                console.log("this.user_id before adding:  when true "+this.user_id);

                this.user_id.push(id);
                console.log("this.user_id after adding: when true "+this.user_id);
                $('#tab-top-head').hide();

                $('#pendingSeller_'+id).prop('checked', true);
                $('#showApproveButton').show();

            }
        }


        function approvePendingSellers(){
            console.log("users to be approved are :- "+this.user_id);

//            for(var i=0;i<this.user_id.length;i++){
//                console.log("this.user_id[i] "+this.user_id[i]);
//
//                $('#approvedIds_'+this.user_id[i]).hide();
//            }
            $.post('/approveUser',{'id':this.user_id,'_token':$('input[name=_token]').val()},function(data){
                if(data==1){
                    console.log('Successfull');
                    alert("Sellers Approved..!!");
                    this.user_id=[];
                    location.reload();
                }
                else{
                    alert("Error approving Sellers.");
                }
            });

        }

        function selectBlockSellers(id){
            if($("#sellerIds_"+id).prop('checked') == true){
                //do something
                $('#sellerIds_'+id).prop('checked', false);

                console.log("this.block_user_id before removing : "+this.block_user_id);

                this.block_user_id = jQuery.grep(this.block_user_id, function(value) {
                    return value != id;
                });

                console.log("this.block_user_id after removing: "+this.block_user_id);

                if(this.block_user_id.length == 0){
                    $('#showBlockButton').hide();
                    $('#tab-top-head').show();

                }


            }else{
                console.log("this.block_user_id before adding:  when true "+this.block_user_id);

                this.block_user_id.push(id);
                console.log("this.block_user_id after adding: when true "+this.block_user_id);
                $('#tab-top-head').hide();

                $('#sellerIds_'+id).prop('checked', true);
                $('#showBlockButton').show();

            }
        }


        function blockSellers(id){
            console.log("User ids to be blocked: "+this.block_user_id);

            $.post('/blockUnbockuser',{'id': this.block_user_id,'_token':$('input[name=_token]').val()},function(data){
                if(data==1){
                    this.block_user_id=[];
                    location.reload();
                    alert("Sellers Blocked..!!");
                }
                else{
                    alert("Error Performing this function .");
                }
            });
        }





        function showPendingSellers(){
            $('.pendingSellers').show();
            $('.approvedSellers').hide();
            $('#pendingSellersList').addClass('active')
            $('#sellersList').removeClass('active')
        }

        function showSellers(){
            $('.pendingSellers').hide();
            $('.approvedSellers').show();
            $('#pendingSellersList').removeClass('active')
            $('#sellersList').addClass('active')
        }


        function approveUser(id){
            console.log("User id to approve is : "+id);

            $.post('/approveUser',{'id':id,'_token':$('input[name=_token]').val()},function(data){
                if(data==1){
                    console.log('Successfull');
                    $('#userId_'+id).hide();
                    $("#hidden-div_"+id).show();
                    alert("User Approved..!!");
                }
                else{
                    alert("Error approving user.");
                }
            });
        }



        function blockOrUnblockUser(id){
            console.log("User id to be blocked or unblocked is : "+id);
            var change = document.getElementById('blockId_'+id);
            console.log("change.innerHTML : "+change.innerHTML);

            $.post('/blockUnbockuser',{'id': id,'_token':$('input[name=_token]').val()},function(data){
                if(data==1){
                    if(change.innerHTML.trim() == "Block"){
                        change.innerHTML = "Unblock";
                    }
                    else{
                        change.innerHTML = "Block";
                    }
                    alert("User UnBlocked..!!");
                }
                else{
                    alert("Error Performing this function user.");
                }
            });
        }
    </script>
    @endsection
