@extends('layouts.main')
@section('title','| Services')
@section('content')
<link rel="stylesheet" href="fonts/themify-icons/themify-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<br/>
<br/>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Services</li>
            </ol>

            <div class="main">

                <div class="container">
                    <h2>Purchase A Ticket With Us</h2>
                    <form method="POST" action="{{route('customers.store')}}" id="signup-form" class="signup-form">
                        <input name="_token" type="hidden" value="{{csrf_token()}}"/>


                            <h3>
                                <span class="icon"><i class="ti-car"></i></span>
                                <span class="title_text">Trip</span>
                            </h3>
                            <fieldset>
                                <legend>
                                    <span class="step-heading"> Travelling Details: </span>
                                    <span class="step-number">Step 2 / 3</span>
                                </legend>
                                <div class="form-select">
                                    <div class="select-list">
                                        <select name="company">
                                            <option value="">Company</option>
                                            <option value="VIP">VIP</option>
                                            <option value="STC">STC</option>
                                            <option value="OA Travel">OA Travel</option>
                                            <option value="VVIP">VVIP</option>
                                            <option value="2M Express">2M Express</option>
                                        </select>
                                    </div>
                                        <div class="form-select">
                                            <div class="select-list">
                                                    {{Form::label('region_name','Region')}}
                                                    {{Form::select('region_name',$regions,null,['class'=>'form-control','required','placeholder'=>'---Location---','id'=>'region'])}}

                                            </div>
                                </div>
                                <div class="form-select">
                                    <div class="select-list">
                                            {{Form::label('trip_name','Trip')}}
                                            {{Form::select('trip_name',[],null,['class'=>'form-control','required','placeholder'=>'---Destination---','id'=>'trip'])}}

                                    </div>
                            </fieldset>
                            <h3>
                                <span class="icon"><i class="ti-layout-grid4"></i></span>
                                <span class="title_text" style="text-align:center"> Bookings & Payament</span>
                            </h3>
                            <fieldset>
                                <legend>
                                    <span class="step-heading">Book A Seat: </span>
                                    <span class="step-number">Step 3 / 3</span>
                                </legend>
                                <div class="form-group">
                                    <label for="holder_name" class="form-label required">Seats Available</label>
                                    <input type="number" name="holder_name" id="holder_name" readonly="" placeholder="45" />
                                </div>

                                <legend>
                                    <span class="step-heading">Payment: </span>
                                </legend>
                                <script src="https://checkout.flutterwave.com/v3.js"></script>
                                <button type="button" class="btn btn-primary btn-block btn-lg" onClick="makePayment()" style="">Make Payment</button>
                            </fieldset>



                    </form>
                </div>

            </div>


            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
            <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
            <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
            <script src="vendor/minimalist-picker/dobpicker.js"></script>
            <script src="js/main.js"></script>


            <script>
                    // ajax for categories and subcategories dropdwon
                $(document).ready(function(){
                    $('#region').change(function(){
                        var region_id = $('#region').val();

                        var url = "{{route('getTrips')}}";
                        console.log(url);
                        $.ajax({
                                url: url,
                                method: 'GET',
                                data: {region_id:region_id},
                                dataType: 'json',
                                success: function(trip) {
                                    $('#trip').children('option').remove();
                                    $.each(trip, function(value, name) {
                                       $('#trip').append('<option value="' + value + '">' + name + '</option>');
                                    });
                                    // console.log(trips);
                                },
                                error: function() {
                                    alert('Problem updating subcategory input');
                                }
                            });

                    });

                });
                </script>

<script>
    function makePayment() {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-31d61a13026483fc38f15f0e90232374-X",
        tx_ref: "hooli-tx-1920bbtyt",
        amount: 54600,
        currency: "NGNR",
        payment_options: "card,mobilemoney,ussd",
        redirect_url: // specified redirect URL
          "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
        meta: {
          consumer_id: 23,
          consumer_mac: "92a3-912ba-1192a",
        },
        customer: {
          email: "sblignam@gmail.com",
          phone_number: "0559698887",
          name: "Stephen",
        },
        callback: function (data) {
          console.log(data);
        },
        customizations: {
          title: "My store",
          description: "Payment for items in cart",
          logo: "https://assets.piedpiper.com/logo.png",
        },
      });
    }
  </script>
        </div>
        @endsection
