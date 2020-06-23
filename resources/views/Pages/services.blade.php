@section('title','| Services')
<link rel="stylesheet" href="fonts/themify-icons/themify-icons.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
@extends('layouts.welcome')
@section('content')
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
                    <h2>SIGN UP OFFICE EMPLYEE ACCOUNT</h2>
                    <form method="POST" action="{{route('customers.store')}}" id="signup-form" class="signup-form">
                        <input name="_token" type="hidden" value="{{csrf_token()}}"/>
                            <h3>
                                <span class="icon"><i class="ti-user"></i></span>
                                <span class="title_text">Personal</span>
                            </h3>
                            <fieldset>
                                <legend>
                                    <span class="step-heading">Personal Informaltion: </span>
                                    <span class="step-number">Step 1 / 4</span>
                                </legend>
                                <div class="form-group">
                                    <label for="fname" class="form-label required">First name</label>
                                    <input type="text" name="fname" id="first_name" />
                                </div>

                                <div class="form-group">
                                    <label for="lname" class="form-label required">Last name</label>
                                    <input type="text" name="lname" id="last_name" />
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-label required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>



                                <div class="form-group">
                                    <label for="password" class="form-label required">Password</label>
                                    <input type="password" name="password" id="password" />
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="form-label required">Phone Number</label>
                                    <input type="number" name="phone" id="phone" />
                                </div>


                                <div class="form-group">
                                    <label for="id_type" class="form-label required">Please enter your ID number</label>
                                    <input type="text" name="id_type" id="verify" pattern="[a-zA-Z0-9\s]+" />
                                </div>

                                <div class="form-group">
                                        <label for="id_number" class="form-label required">Please enter your ID number</label>
                                        <input type="text" name="id_number" id="verify" pattern="[a-zA-Z0-9\s]+" />
                                </div>
                            </fieldset>

                            <h3>
                                <span class="icon"><i class="ti-car"></i></span>
                                <span class="title_text">Trip</span>
                            </h3>
                            <fieldset>
                                <legend>
                                    <span class="step-heading"> Informaltion: </span>
                                    <span class="step-number">Step 2 / 4</span>
                                </legend>
                                <div class="form-select">
                                    <div class="select-list">
                                        <select name="Location">
                                            <option value="">Company</option>
                                            <option value="Male">x</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                        <div class="form-select">
                                            <div class="select-list">
                                                <select name="Location">
                                                    <option value="">From</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                </div>
                                <div class="form-select">
                                        <div class="select-list">
                                            <select name="" id="">
                                                <option value="">To</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                            </fieldset>

                            <h3>
                                <span class="icon"><i class="ti-star"></i></span>
                                <span class="title_text">Offical</span>
                            </h3>
                            <fieldset>
                                <legend>
                                    <span class="step-heading">Offical Informaltion: </span>
                                    <span class="step-number">Step 3 / 4</span>
                                </legend>
                                <div class="form-group">
                                    <label for="employee_id" class="form-label required">Employee ID</label>
                                    <input type="text" name="employee_id" id="employee_id" />
                                </div>

                                <div class="form-group">
                                    <label for="designation" class="form-label required">Designation</label>
                                    <input type="text" name="designation" id="designation" />
                                </div>

                                <div class="form-group">
                                    <label for="department" class="form-label required">Department</label>
                                    <input type="text" name="department" id="department" />
                                </div>

                                <div class="form-group">
                                    <label for="work_hours" class="form-label required">Working hours</label>
                                    <input type="text" name="work_hours" id="work_hours" />
                                </div>
                            </fieldset>

                            <h3>
                                <span class="icon"><i class="ti-credit-card"></i></span>
                                <span class="title_text">Payment</span>
                            </h3>
                            <fieldset>
                                <legend>
                                    <span class="step-heading">Payment Informaltion: </span>
                                    <span class="step-number">Step 4 / 4</span>
                                </legend>
                                <div class="form-group">
                                    <label for="bank_name" class="form-label required">Bank Name</label>
                                    <input type="text" name="bank_name" id="bank_name" />
                                </div>

                                <div class="form-group">
                                    <label for="holder_name" class="form-label required">Holder Name</label>
                                    <input type="text" name="holder_name" id="holder_name" />
                                </div>

                                <div class="form-row">
                                    <div class="form-date">
                                        <label for="expiry_date" class="form-label">Expiry Date</label>
                                        <div class="form-date-group">
                                            <div class="form-date-item">
                                                <select id="expiry_date" name="expiry_date"></select>
                                                <span class="select-icon"><i class="ti-angle-down"></i></span>
                                            </div>
                                            <div class="form-date-item">
                                                <select id="expiry_month" name="expiry_month"></select>
                                                <span class="select-icon"><i class="ti-angle-down"></i></span>
                                            </div>
                                            <div class="form-date-item">
                                                <select id="expiry_year" name="expiry_year"></select>
                                                <span class="select-icon"><i class="ti-angle-down"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-select">
                                        <label for="payment_type" class="form-label">Payment type</label>
                                        <div class="select-list">
                                            <select name="payment_type" id="payment_type">
                                                <option value="">Master Card</option>
                                                <option value="Master Card">Master Card</option>
                                                <option value="Visa Card">Visa Card</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="card_number" class="form-label required">Card Number</label>
                                        <input type="number" name="card_number" id="card_number" />
                                    </div>

                                    <div class="form-group">
                                        <label for="cvc" class="form-label required">CVC</label>
                                        <input type="text" name="cvc" id="cvc" />
                                    </div>
                                </div>
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
        </div>
        @endsection
