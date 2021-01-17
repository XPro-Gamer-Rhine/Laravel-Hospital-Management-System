@extends('admin.layouts.design')

@section('content')

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
                                    <div class="card-title">All Patients Prescriptions</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
                                            <thead>
                                                <tr class="border-bottom-0">
                                                    
                                                    <th class="wd-15p">Patient Name</th>
                                                    <th class="wd-15p">Disease's Name</th>
                                                    <th class="wd-15p">Patient Mobile NO:</th>
                                                    <th class="wd-15p">Issue-Date</th>
                                                    <th class="wd-15p">Expire-Date</th>
                                                    <th class="wd-20p">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	
                                                
                                                
                                                    @foreach($pres as $pre)
                                                        <tr class="border-top-0">
                                                            
                                                            <td>{{ $pre->patient_name }}</td>
                                                            <td>{{ $pre->disease_name }}</td>
                                                            <td>{{ $pre->patient_mobile }}</td>
                                                            <td>{{ $pre->issue_date }}</td>
                                                            <td>{{ $pre->expire_date }}</td>
                                                            
                                                            
                                                            <td><a href="" data-toggle="modal" data-target="#exampleModal{{ $pre->id }}"><span class="badge badge-info">View</span></a> &emsp; <a href="javascript:" class="deletePrescription" rel="{{ $pre->id }}" rel1="prescription"><span class="badge badge-danger">Delete</span></a>&emsp; <a href="{{ url('/doctor/print/prescription/'.$pre->id) }}" ><span class="badge badge-success">Print</span></a></td>
                                                            
                                                            
                                                        </tr>
                                                        {{-- View Modal --}}
                                                            <div class="modal fade" id="exampleModal{{ $pre->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                  <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">{{ $pre->patient_name }}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <h3>{{ $pre->disease_name }}</h3>
                                                                        <p>{{ $pre->patient_mobile }}</p>
                                                                        <ul>
                                                                            <li><b>Medicine Name: </b>{{ $pre->medicine_name }} &ensp; <b>Quantity : </b>{{ $pre->quantity }}</li>
                                                                            <li><b>Morning :</b> {{ $pre->morning }} &ensp; <b>Mid-Day : </b>{{ $pre->mid_day }} &ensp; <b>Night : </b>{{ $pre->night }}</li>
                                                                        </ul>
                                                                        <p><b>Patient's Condition Description</b><i>{{ $pre->description }}</i></p>
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                            </div>
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

