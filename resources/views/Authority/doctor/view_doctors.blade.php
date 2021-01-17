@extends('Authority.layouts.design')

@section('content')

<div class=" content-area">
                    <div class="page-header">
                        <h4 class="page-title">View Doctors</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View-doctors</li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
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
                                <div class="card-header">
                                    <div class="card-title">All Alailable Doctors</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
                                            <thead>
                                                <tr class="border-bottom-0">
                                                    <th class="wd-15p">Doctor ID</th>
                                                    <th class="wd-15p">Doctor name</th>
                                                    <th class="wd-15p">Doctor Field</th>
                                                    <th class="wd-15p">Doctor Fee</th>
                                                    <th class="wd-15p">Doctor Office-Hour</th>
                                                    <th class="wd-15p">Doctor Email</th>
                                                    <th class="wd-15p">Doctor Address</th>
                                                    <th class="wd-15p">Doctor Image</th>
                                                    <th class="wd-15p">Doctor Status</th>
                                                    <th class="wd-20p">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($doctors as $doctor)
                                                <tr class="border-top-0">
                                                    <td>{{ $doctor->id }}</td>
                                                    <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                                                    <td>{{ $doctor->field }}</td>
                                                    <td>{{ $doctor->fee }}</td>
                                                    <td>{{ $doctor->office_hour }}</td>
                                                    <td>{{ $doctor->email }}</td>
                                                    <td>{{ $doctor->address }}</td>
                                                    <td><div class="col-12">
                                                            <img class="avatar brround avatar-xl" src="{{ asset('images/backend_images/doctors_images/'.$doctor->image) }}" ></span>
                                                        </div>
                                                    </td>
                                                    <td>@if($doctor->status == 1) <span class="badge badge-pill badge-success">Active</span>  @else <span class="badge badge-pill badge-danger">Inactive</span> @endif</td>
                                                    <td><a href="{{ url('/doctor/edit-doctor/'.$doctor->id) }}"><span class="badge badge-info">Edit</span></a> &emsp; <a href="javascript:" class="deleteDoctor" rel="{{ $doctor->id }}" rel1="delete-doctor"><span class="badge badge-danger">Delete</span></a></td>
                                                    
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- table-wrapper -->
                            </div>
                            <!-- section-wrapper -->
                        </div>
                    </div>
                </div>

@endsection

