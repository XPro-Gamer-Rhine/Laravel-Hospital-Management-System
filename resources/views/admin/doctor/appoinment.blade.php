@extends('admin.layouts.design')

@section('content')
<?php use App\Patient; ?>
<div class=" content-area">
                    <div class="page-header">
                        <h4 class="page-title">View Appoinments</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/doctor/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View-Appoinments</li>
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
                                    <div class="card-title">All Patients Appoinments</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
                                            <thead>
                                                <tr class="border-bottom-0">
                                                    <th class="wd-15p">Doctor ID</th>
                                                    <th class="wd-15p">Patient ID</th>
                                                    <th class="wd-15p">Patient Name</th>
                                                    <th class="wd-15p">Patient Mobile NO:</th>
                                                    <th class="wd-15p">Appoinment Date</th>
                                                    <th class="wd-15p">Patient Email</th>
                                                    
                                                    <th class="wd-15p">Patient Address</th>
                                                    
                                                    <th class="wd-20p">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($appoinments as $app)
                                                
                                                <?php
                                                    $p_id = Patient::where('id',$app->patient_id)->get();   
                                                ?>
                                                    @foreach($p_id as $pid)
                                                        <tr class="border-top-0">
                                                            <td>{{ $app->doctor_id }}</td>
                                                            <td>{{ $pid->id }}</td>
                                                            <td>{{ $pid->name }}</td>
                                                            <td>{{ $pid->mobile }}</td>
                                                            <td>{{ $pid->date }}</td>
                                                            <td>{{ $pid->email }}</td>
                                                            <td>{{ $pid->address }}</td>
                                                            
                                                            <td><a href="javascript:" class="deleteApp" rel="{{ $app->id }}" rel1="delete-appoinment"><span class="badge badge-danger">Delete</span></a></td>
                                                            
                                                            
                                                        </tr>
                                                    @endforeach
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

