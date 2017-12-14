@extends('layouts.adminNav')

@section('content')

            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>


                    <div class="x_content">


                        <ul class="tab-top-head">
                            <li class="active"><a href="#">Buyers</a></li>
                            <li><a href="#">Sellers</a></li>
                            <li><a href="#">Pending Sellers</a></li>
                            <li><a href="#">Blocked Users</a></li>
                        </ul>
                        <div class="table-responsive">
                            <table class="table  jambo_table bulk_action tab-bold-head">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title"></th>
                                    <th class="column-title">Status</th>
                                    <th class="column-title">Block</th>
                                    <th class="column-title">User ID</th>
                                    <th class="column-title"> Name</th>
                                    <th class="column-title">Phone</th>
                                    <th class="column-title">Mail ID</th>
                                    <th class="column-title">Phone</th>

                                </tr>
                                </thead>

                                <tbody>

                                @foreach($user as $u)

                                <tr class="even">
                                    <td class=" ">
                                        <label class="checkbox-wp  checktick">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>

                                    <td class=" ">
                                        <div class="hidden-div" id="hidden-div_{{$u->id}}">Approved</div>
                                        @if($u->isApproved != 1)
                                            <div  id="userId_{{$u->id}}" >
                                                <button onclick="approveUser({{$u->id}})">
                                                    Approve
                                                </button>
                                            </div>
                                            @else
                                            Approved
                                        @endif
                                    </td>

                                    <td class=" ">

                                            <div>
                                                <button  class="blockId_{{$u->id}}"  id="blockId_{{$u->id}}"  onclick="blockOrUnblockUser({{$u->id}})">
                                                    @if($u->isBlocked == 1)
                                                    Unblock
                                                        @else
                                                        Block
                                                    @endif
                                                </button>
                                            </div>
                                    </td>

                                    <td class=" ">{{$u->id}}</td>
                                    <td class=" ">{{$u->name}}</td>
                                    <td class=" ">20.10.17</td>
                                    <td class=" ">Jain Irrigation Pvt. Ltd.</td>
                                    <td class=" ">satheeshk@jainirrigation.com</td>
                                    <td class=" ">9599 187 945</td>


                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div>

@endsection

@section('script')


    <script>


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
                    if(change.innerHTML == "Block"){
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
