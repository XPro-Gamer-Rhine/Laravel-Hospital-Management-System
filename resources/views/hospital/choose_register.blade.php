@extends('hospital.layouts.design')

@section('content')


<div class="page-ttl">
        <div class="layer-stretch" style="margin-top: 150px;">
            <div class="page-ttl-container">
                <h1>Components</h1>
                <p><a href="#">Home</a> &#8594; <span>Components</span></p>
            </div>
        </div>
    </div>
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-9">
                    
                    <div id="card">
                        <div class="sub-ttl font-28">Choose Your Registration Field</div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="card text-right">
                                        <img class="card-img-top" src="{{ asset('hospital/images/doctor.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Doctor Registration</h4>
                                            <p class="card-text">Here is the registration form for New Doctor . Please Fill the form and wait for authorization from Admin . </p>
                                            <a href="{{ url('/doctor/register') }}" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Register Doctor</a>
                                        </div>
                                    </div>
                                    <p></p>
                                </div>
                                <div class="col-md-6">
                                    <div class="card text-right">
                                        <img class="card-img-top" src="{{ asset('hospital/images/intern.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Intern Registration</h4>
                                            <p class="card-text">Here is the registration for for Inters . Please fill it properly and wait for Authority to review it . </p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Register Intern</a>
                                        </div>
                                    </div>
                                    <p></p>
                                </div>
                            
                            
                            
                            
                            
                            <div class="clearfix clear"></div>
                            <div class="col-sm-6">
                                    <div class="card text-right">
                                        <img class="card-img-top" src="{{ asset('hospital/images/patient.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Patient Registration</h4>
                                            <p class="card-text">Here is Patient form . For all info and inqueries fill the form and wait for Hospital to provide you with your Dashboard</p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Register Paitent</a>
                                        </div>
                                    </div>
                                    <p></p>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-right">
                                        <img class="card-img-top" src="{{ asset('hospital/images/staff.png') }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Staff Registration</h4>
                                            <p class="card-text">Here is the registration form for Staff members . Please Fill it carefully and wait for Authority to check it . </p>
                                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-purple button-fill-purple">Register Staff</a>
                                        </div>
                                    </div>
                                    <p></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection