@extends('admin.layouts.design')

@section('content')
<?php use App\Patient; ?>
<div class=" content-area">
                    <div class="page-header">
                        <h4 class="page-title">Make Prescription</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/doctor/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add-Prescription</li>
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
                                    <div class="card-title">Prescribe a Patient</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form class="card" method="post" action="{{ url('/doctor/make/prescription') }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                
                                
                                    
                                        
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        
                                                        <input type="hidden" name="doctor_id" value="{{ $doc->id }}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Patient Name</label>
                                                        <input type="text" class="form-control" placeholder="Patient Name" name="patient_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Disease</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail11" placeholder="Enter Disease name" name="disease_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="control-group">
                                                            <label class="form-label">Prescribe Medicine With Time and Quantity</label>
                                                            <div class="controls field_wrapper">
                                                              <input required title="Required"  type="text" name="medicine[]" id="med" placeholder="Medicine Name" style="width:180px;">
                                                              <input required title="Required"  type="text" name="quantity[]" id="qty" placeholder="Total Quantity Of Medicine (0-100)" style="width:230px;">
                                                              <input required title="Required"  type="text" name="morning[]" id="morning" placeholder="Medicine Per Morning" style="width:180px;"> 
                                                              <input required title="Required"  type="text" name="mid_day[]" id="midday" placeholder="Medicine Per Mid-Day" style="width:180px;">
                                                              <input required title="Required"  type="text" name="night[]" id="night" placeholder="Medicine Per Night" style="width:180px;">
                                                              <a href="javascript:void(0);" class="add_button" title="Add field">Add</a>
                                                            </div>
                                                          </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Issue Date</label>
                                                        <input type="date" class="form-control" placeholder="00-00-0000" name="issue_date">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Expire Date</label>
                                                        <input type="date" class="form-control" placeholder="11-11-1111" name="expire_date">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Patient Mobile No</label>
                                                        <input type="text" class="form-control" placeholder="+88017221442" name="patient_mobile">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Fee</label>
                                                        <input type="text" class="form-control" placeholder="500TK" name="fee">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <label class="form-label">Description</label>
                                                        <textarea rows="5" class="form-control" placeholder="Enter Disease description" name="description"></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary">Prescribe</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- table-wrapper -->
                            </div>
                            <!-- section-wrapper -->
                        </div>
                    </div>
                </div>

@endsection

