@extends('hospital.layouts.design')

@section('content')
	
	<div class="page-ttl">
        <div class="layer-stretch" style="margin-top: 150px;">
            <div class="page-ttl-container">
                <h1>Register</h1>
                <p><a href="#">Home</a> &#8594; <span>Register</span></p>
            </div>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Register Section -->
    <div class="layer-stretch" >
        <div class="layer-wrapper" >
            <div class="form-container" >
                <form method="post" action="{{ url('/doctor/register') }}" enctype="multipart/form-data">
                	{{ csrf_field() }}
                	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="register-name" name="first_name">
	                    <label class="mdl-textfield__label" for="register-name">First-Name <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Valid Name!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="register-name" name="last_name">
	                    <label class="mdl-textfield__label" for="register-name">Last-Name <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Valid Name!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
	                    <i class="fa fa-envelope-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="register-email" name="email">
	                    <label class="mdl-textfield__label" for="register-email">Email <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Valid Email!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
	                    <i class="fa fa-key"></i>
	                    <input class="mdl-textfield__input" type="password" id="register-password" name="password">
	                    <label class="mdl-textfield__label" for="register-password">Password <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Valid Password(Min 6 Character)!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z,0-9,# ]*" id="register-name" name="address">
	                    <label class="mdl-textfield__label" for="register-name">Address <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Valid Address!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="register-name" name="university">
	                    <label class="mdl-textfield__label" for="register-name">University <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Valid University Name!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text"  id="register-name" name="achievement">
	                    <label class="mdl-textfield__label" for="register-name">Achievement <em> </em></label>
	                    
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="register-name" name="qualification">
	                    <label class="mdl-textfield__label" for="register-name">Qualification <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Your Highest Qualification</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="date"  name="date_of_birth">
	                   
	                    
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="time"  name="office_hour" title="11:59pm">
	                    <label class="mdl-textfield__label" >Prefered Offlice Hour <em> *</em></label>
	                   
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z,0-9 ]*" id="register-name" name="fee" placeholder="500TK">
	                    <label class="mdl-textfield__label" for="register-name">FEE/Hourly Charge <em> *</em></label>
	                    <span class="mdl-textfield__error">Please Enter Your Expected Hourly Charge!</span>
	                </div>
	                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon" >
	                    <i class="fa fa-user-o"></i>
	                    <textarea class="mdl-textfield__input" name="about" rows="8" cols="20"></textarea>
	                    <label class="mdl-textfield__label" for="register-name" >About Yourself <em> </em></label>
	                   
	                </div>
	                <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                                        <i class="fa fa-angle-double-down"></i>
                                        <select class="mdl-selectfield__select" id="sample-selectlist-1" name="field">
                                            <option value="">&nbsp;</option>
                                            @foreach($fields as $field )
                                            <option value="{{ $field->field_name }}">{{ $field->field_name }}</option>
                                            @endforeach
                                        </select>
                                        <label class="mdl-selectfield__label" for="sample-selectlist-1">Select Medical Field</label>
                    </div>
                    
                                        
                                        <input class="mdl-textfield__input" type="file"  name="image" title="Chose Your Image">
                                        <label class="mdl-selectfield__label" for="sample-selectlist-1">Select Image</label>
                    
                
                <div class="login-condition">By clicking Creat Account you agree to our<br /><a href="#">terms &#38; condition</a></div>
                <div class="form-submit">
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" type="submit">Create Account</button>
                </div>
                </form>
                <div class="login-link">
                    <span class="paragraph-small">Already have an account?</span>
                    <a href="#" class="">Login Now</a>
                </div>
            </div>
        </div>
    </div>

@endsection