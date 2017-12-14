@extends('layouts.newUserRegister')

@section('content')


<div class="backgroundColorRegister">
    <form class="form-horizontal" method="POST" action="{{ route('myformPost') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <div class="divPositionNewRegister" id="firstForm" style="display: block;">
            
            <div class="form-group{{ $errors->has('buisnessname') ? ' has-error' : '' }} required">
                <label for="businessname" class="col-md-offset-2 inputLabel">Business Name</label>
                
                <div class="col-md-8 col-md-offset-2">
                    <input id="businessname" type="text" placeholder="Enter the name of your company" class="form-control" name="businessname" value="{{ old('businessname') }}" autofocus>
                        @if ($errors->has('businessname'))
                            <span class="help-block errorText">
                                This field can't be blank
                            </span>
                        @endif
                    </div>
                </div>

            <div class="form-group{{ $errors->has('businesstype') ? ' has-error' : '' }} required">
                <label for="businesstype" class="col-md-offset-2 inputLabel">Business Type</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="buisnesstype" type="text" placeholder="Select business type" class="form-control" name="businesstype" value="{{ old('businesstype') }}"  autofocus>
                            @if ($errors->has('businesstype'))
                                <span class="help-block errorText">
                                    This field can't be blank
                                </span>
                            @endif
                        </div>
                    </div>

            <div class="form-group{{ $errors->has('industry') ? ' has-error' : '' }} required">
                <label for="industry" class="col-md-offset-2 inputLabel">Industry</label>

                    <div class="col-md-8 col-md-offset-2">
                        <select id="industry" type="text"  class="form-control" name="industry" value="{{ old('industry') }}"  autofocus>
                            <option hidden >Select industry</option>
						    <option value="text1"> text 1 </option>
						    <option value="text2"> text 2 </option>
						    <option value="text3"> text 3 </option>

                            @if ($errors->has('industry'))
                                <span class="help-block errorText">
                                    {{ $errors->first('industry') }}
                                </span>
                            @endif
                        </select>
                    </div>
                </div>

                <hr style="margin-top: 58%;">
                <div class="form-group">
                    <div class="col-md-2 col-md-offset-0" style="bottom: 2%; position: absolute; left: 1%;">
                        <a  href="{{ route('login') }}">
                        <button type="button" class="btn btn-default" style="padding: 4px 20px; font-weight: 500;">
	                            Back
                            </button></a>
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-md-2 col-md-offset-8" style="bottom: 2%; position: absolute; right: 6%;">
	                    <button type="button" onclick="myFunction()" class="btn btn-primary" style="padding: 4px 20px; font-weight: 500; background-color:#2350f5 " >
	                           Next
	                        </button>
	                    </div>
	                </div>
        </div>

        <!-- Second Form -->

        <div class="divPositionNewRegister" id="secondForm" style="display: none;">

            <div class="form-group{{ $errors->has('addressline1') ? ' has-error' : '' }} required">
                <label for="addressline1" class="col-md-offset-2 inputLabel">Address Line 1</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="addressline1" type="text" placeholder="" class="form-control" name="addressline1" value="{{ old('addressline1') }}" autofocus>

                    @if ($errors->has('addressline1'))
                        <span class="help-block errorText">
                                   This field can't be blank
                                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('addressline2') ? ' has-error' : '' }} required">
                <label for="addressline2" class="col-md-offset-2 inputLabel">Address Line 2</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="buisnesstype" type="text" placeholder="" class="form-control" name="addressline2" value="{{ old('addressline2') }}"  autofocus>

                    @if ($errors->has('addressline2'))
                        <span class="help-block errorText">
                                    This field can't be blank
                                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('landmark') ? ' has-error' : '' }} required">
                <label for="landmark" class="col-md-offset-2 inputLabel">Landmark</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="landmark" type="text"  placeholder="Building,area,locality, Opposite to" class="form-control" name="landmark" value="{{ old('landmark') }}"  autofocus>


                    @if ($errors->has('landmark'))
                        <span class="help-block errorText">
                                  {{ $errors->first('landmark') }}
                                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }} required">
                <label for="city" class="col-md-offset-2 inputLabel">City</label>

                <div class="col-md-8 col-md-offset-2">
                    <select id="city" type="text"  class="form-control" name="city" value="{{ old('city') }}"  autofocus>

                        <option hidden >Select City</option>
                        <option value="Noida"> Noida </option>
                        <option value="Delhi"> Delhi </option>
                        <option value="Nainital"> Nainital </option>


                    @if ($errors->has('city'))
                        <span class="help-block errorText">
                                  {{ $errors->first('city') }}
                                </span>
                    @endif
                </select>
                </div>
            </div>

            <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }} required">
                <label for="pincode" class="col-md-offset-2 inputLabel">Pin Code</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="pincode" type="text"  placeholder="" class="form-control" name="pincode" value="{{ old('pincode') }}"  autofocus>


                    @if ($errors->has('pincode'))
                        <span class="help-block errorText">
                                  {{ $errors->first('pincode') }}
                                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }} required">
                <label for="state" class="col-md-offset-2 inputLabel">State</label>

                <div class="col-md-8 col-md-offset-2">
                    <select id="state" type="text"  class="form-control" name="state" value="{{ old('state') }}"  autofocus>

                        <option hidden >Select state</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>

                    @if ($errors->has('state'))
                        <span class="help-block errorText">
                                  {{ $errors->first('state') }}
                                </span>
                    @endif
                </select>
                </div>
            </div>

            <hr style="margin-top: 15.5%;">
            <div class="form-group">
                <div class="col-md-2 col-md-offset-0" style="bottom: 2%; position: absolute; left: 1%;">
                    <button type="button" onclick="backSecond()"class="btn btn-default" style="padding: 4px 20px; font-weight: 500;">
                        Back
                    </button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2 col-md-offset-8" style="bottom: 2%; position: absolute; right: 6%;">
                    <button type="button" onclick="secondForm()" class="btn btn-primary" style="padding: 4px 20px; font-weight: 500; background-color:#2350f5 " >
                        Next
                    </button>
                </div>
            </div>
        </div>


        <!-- Third Form -->

        <div class="divPositionNewRegister" id="thirdForm"  style="display: none;">
            

            <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }} required">
                <label for="bank" class="col-md-offset-2 inputLabel">Bank</label>

                <div class="col-md-8 col-md-offset-2">
                    <select id="bank" type="text"  class="form-control" name="bank" value="{{ old('bank') }}"  autofocus>

                        <option hidden >Select your bank</option>
                        <option value="Axis Bank">Axis Bank</option>
                        <option value="Bank Of Baroda">Bank Of Baroda</option>
                        <option value="Bank Of India">Bank Of India</option>
                        <option value="Bank Of Maharashtra">Bank Of Maharashtra</option>
                        <option value="Canara Bank">Canara Bank</option>
                        <option value="Central Bank Of India">Central Bank Of India</option>
                        <option value="Hdfc Bank Ltd">Hdfc Bank Ltd</option>
                        <option value="Icici Bank Ltd">Icici Bank Ltd</option>
                        <option value="Indian Overseas Bank">Indian Overseas Bank</option>
                        <option value="Punjab National Bank">Punjab National Bank</option>
                        <option value="State Bank Of India">State Bank Of India</option>
                        <option value="Union Bank Of India">Union Bank Of India</option>



                    @if ($errors->has('bank'))
                        <span class="help-block errorText">
                                  {{ $errors->first('bank') }}
                                </span>
                    @endif
                </select>
                </div>
            </div>

            <div class="form-group{{ $errors->has('accountholdername') ? ' has-error' : '' }} required">
                <label for="accountholdername" class="col-md-offset-2 inputLabel">Account Holder Name</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="accountholdername" type="text" placeholder="" class="form-control" name="accountholdername" value="{{ old('accountholdername') }}"  autofocus>

                    @if ($errors->has('accountholdername'))
                        <span class="help-block errorText">
                                    This field can't be blank
                                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('accountnumber') ? ' has-error' : '' }} required">
                <label for="accountnumber" class="col-md-offset-2 inputLabel">Account Number</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="accountnumber" type="text" placeholder="" class="form-control" name="accountnumber" value="{{ old('accountnumber') }}"  autofocus>

                    @if ($errors->has('accountnumber'))
                        <span class="help-block errorText">
                                    This field can't be blank
                                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('ifsccode') ? ' has-error' : '' }} required">
                <label for="ifsccode" class="col-md-offset-2 inputLabel">IFSC Code</label>

                <div class="col-md-8 col-md-offset-2">
                    <input id="ifsccode" type="text" placeholder="" class="form-control" name="ifsccode" value="{{ old('ifsccode') }}"  autofocus>

                    @if ($errors->has('ifsccode'))
                        <span class="help-block errorText">
                                    This field can't be blank
                                </span>
                    @endif
                </div>
            </div>

            <hr style="margin-top: 43.5%;">
            <div class="form-group">
                <div class="col-md-2 col-md-offset-0" style="bottom: 2%; position: absolute; left: 1%;">
                    <button type="button" onclick="backThird()" class="btn btn-default" style="padding: 4px 20px; font-weight: 500;">
                        Back
                    </button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2 col-md-offset-8" style="bottom: 2%; position: absolute; right: 6%;">
                    <button type="button" onclick="thirdForm()" class="btn btn-primary" style="padding: 4px 20px; font-weight: 500; background-color:#2350f5 " >
                        Next
                    </button>
                </div>
            </div>
        </div>

        <!-- ourth Form -->

        <div class="divPositionNewRegister" id="fourthForm"  style="display: none;">
        

                <div class="form-group{{ $errors->has('pannumber') ? ' has-error' : '' }} required">
                    <label for="pannumber" class="col-md-offset-2 inputLabel">Pan Number</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="pannumber" type="text" placeholder="" class="form-control" name="pannumber" value="{{ old('pannumber') }}" autofocus>

                        @if ($errors->has('pannumber'))
                            <span class="help-block errorText">
                                       This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('gstcompliance') ? ' has-error' : '' }} required">
                    <label for="gstcompliance" class="col-md-offset-2 inputLabel">GST Compliance</label>

                    <div class="col-md-8 col-md-offset-2">
                        
                        <label class="radio-inline"><input type="radio"  id="gstcompliance"  name="gstcompliance" value="yes"  autofocus>Yes</label>
                        <label class="radio-inline"><input type="radio" id="gstcompliance"  name="gstcompliance" value="No"  autofocus>No</label>

                        @if ($errors->has('gstcompliance'))
                            <span class="help-block errorText">
                                        This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                 <div class="form-group{{ $errors->has('gstin') ? ' has-error' : '' }} required">
                    <label for="gstin" class="col-md-offset-2 inputLabel">GSTIN</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="gstin" type="text" placeholder="" class="form-control" name="gstin" value="{{ old('gstin') }}"  autofocus>

                        @if ($errors->has('gstin'))
                            <span class="help-block errorText">
                                        This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>

                 <div class="form-group{{ $errors->has('vat') ? ' has-error' : '' }} required">
                    <label for="vat" class="col-md-offset-2 inputLabel">VAT</label>

                    <div class="col-md-8 col-md-offset-2">
                        <input id="vat" type="text" placeholder="" class="form-control" name="vat" value="{{ old('vat') }}"  autofocus>

                        @if ($errors->has('vat'))
                            <span class="help-block errorText">
                                        This field can't be blank
                                    </span>
                        @endif
                    </div>
                </div>


                
                    <hr style="margin-top: 45%;">
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-0" style="bottom: 2%; position: absolute; left: 1%;">
                            <button type="button" onclick="backFourth()" class="btn btn-default" style="padding: 4px 20px; font-weight: 500;">
                                Back
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-8" style="bottom: 2%; position: absolute; right: 20%;">
                            <button type="submit"  class="btn btn-primary" style="padding: 4px 20px; font-weight: 500; background-color:#2350f5 " >
                                Create Account
                            </button>
                        </div>
                    </div>
        </div>
 </form>
       

        
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



function myFunction() {
            var change = document.getElementById('firstForm');
                $('#firstForm').hide();
                $('#secondForm').show();
                $('#icon_1').hide();
                $('#iconCheck_1').show();   
            }


        function secondForm() {
            var x = document.getElementById("secondForm");
                $('#secondForm').hide();
                $('#thirdForm').show();
                $('#icon_2').hide();
                $('#iconCheck_2').show();
        }

        function thirdForm() {
            var x = document.getElementById("thirdForm");
                $('#thirdForm').hide();
                $('#fourthForm').show();
                $('#icon_3').hide();
                $('#iconCheck_3').show();
        }

        function fourthForm() {
            var x = document.getElementById("fourthForm");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }

        function backSecond(){
            var change = document.getElementById('secondForm');
                $('#secondForm').hide();
                $('#firstForm').show();
                $('#icon_1').show();
                $('#iconCheck_1').hide();
        }

        function backThird(){
            var change = document.getElementById('thirdForm');
                $('#thirdForm').hide();
                $('#secondForm').show();
                $('#icon_2').show();
                $('#iconCheck_2').hide();
        }

        function backFourth(){
            var change = document.getElementById('fourthForm');
                $('#fourthForm').hide();
                $('#thirdForm').show();
                $('#icon_3').show();
                $('#iconCheck_3').hide();
        }



        


    </script>



    <script type="text/javascript">

    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var businessname = $("input[name='businessname']").val();
            var businesstype = $("input[name='buisnesstype']").val();
            var industry= $("input[name='industry']").val();
            
            $.ajax({
                url: "/UserRegistration",
                type:'POST',
                data: {_token:_token, businessname:businessname, businesstype:businesstype, industry:industry},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });

        }); 

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });

</script>



@endsection

