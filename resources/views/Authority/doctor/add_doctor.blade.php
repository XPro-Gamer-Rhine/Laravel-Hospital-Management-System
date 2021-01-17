@extends('Authority.layouts.design')


@section('content')

<div class="page-header">
                        <h4 class="page-title">Add Doctor </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add-Doctor</li>
                        </ol>
</div>
<div class="col-lg-12">
                            @if(Session::has('flash_message_error'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!!session('flash_message_error')!!}</strong>
                                    </div>
                                @endif
                                @if(Session::has('flash_message_success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!!session('flash_message_success')!!}</strong>
                                    </div>
                            @endif
                            <div class="col-lg-12">
                            <form class="card" method="post" action="{{ url('/doctor/add-doctor') }}" enctype="multipart/form-data">
                            	{{ csrf_field() }}
                                <div class="card-header">
                                    <h3 class="card-title">Doctor's Input Form</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
	                                        <div class="form-group">
		                                        <label class="form-label">Email address</label>
		                                        <input type="email" class="form-control" id="exampleInputEmail11" placeholder="Enter email" name="email">
		                                    </div>
		                                </div>
		                                <div class="col-md-12">
		                                    <div class="form-group">
		                                        <label class="form-label">
		                                            Password
		                                            
		                                        </label>
		                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		                                    </div>
		                                </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Qualification</label>
                                                <input type="text" class="form-control" placeholder="Qualification" name="qualification">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">Achievement</label>
                                                <input type="text" class="form-control" placeholder="Achievement" name="achievement">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label">University</label>
                                                <input type="text" class="form-control" placeholder="University" name="university">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <label class="form-label">Date Of Birth</label>
                                                <div class="wd-200 mg-b-30">
			                                        <div class="input-group">
			                                            <div class="input-group-prepend">
			                                                <div class="input-group-text">
			                                                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
			                                                </div>
			                                            </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" name="date_of_birth">
			                                        </div>
			                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="form-label">Field</label>
                                                <select class="form-control custom-select" name="field">
                                                    <option value="0">--Select--</option>
                                                    @foreach($field as $fld)
                                                    	<option value="{{ $fld->field_name }}">{{ $fld->field_name }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="form-group">
                                                
                                                <div class="form-group">
	                                                <label class="form-label">Fee</label>
	                                                <input type="text" class="form-control" placeholder="Visit Fee" name="fee">
	                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="form-label">Office Hour</label>
                                                <div class="wd-150 mg-b-30">
			                                        <div class="input-group">
			                                            <div class="input-group-prepend">
			                                                <div class="input-group-text">
			                                                    <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
			                                                </div><!-- input-group-text -->
			                                            </div><!-- input-group-prepend -->
			                                            <input class="form-control" id="tp2" placeholder="Set time" type="text" name="office_hour">
			                                        </div>
			                                    </div><!-- input-group -->
			                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <label class="form-label">About</label>
                                                <textarea rows="5" class="form-control" placeholder="Enter About your description" name="about"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-12">
	                                        <div class="col-lg-4 col-sm-12" style="margin-top: 20px;">
	                                            <input type="file" class="dropify" data-height="180" name="image">
	                                        </div>
	                                    </div>
                                        </div>
                                        <div class="form-group">
                                                <div class="form-label">Toggle switch single</div>
                                                <label class="custom-switch">
                                                    <input type="checkbox" name="status" class="custom-switch-input" value="1" {{-- @if($fields->status == 1) Checked @endif --}}>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Activate Doctor's Account</span>
                                                </label>
                                    	</div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
</div>


@endsection