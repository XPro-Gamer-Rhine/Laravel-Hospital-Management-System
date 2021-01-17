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
                                    <div class="card-title">{{ $patient->patient_name }}</div>
                                </div>
                                <div class="card-body">
                                    <h3>Medicine Name : </h3>
                                    @foreach($prescribe as $pre)
                                    <table border="1" style="text-align: center;margin-left: 300px;padding: 15px;color:blue;height: 100px;width: 900px;">
                                        <tr>
                                            <thead>
                                                <th>Medicine Name </th>
                                                <th>Quantity </th>
                                                <th>Morning </th>
                                                <th>Mid-Day </th>
                                                <th>Night </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $pre->medicine_name }}</td>
                                                    <td>{{ $pre->quantity }}</td>
                                                    <td>{{ $pre->morning }}</td>
                                                    <td>{{ $pre->mid_day }}</td>
                                                    <td>{{ $pre->night }}</td>
                                                </tr>
                                            </tbody>
                                        </tr>
                                    </table>
                                    @endforeach
                                    <br>
                                    <p style="margin-top: 15px;"><b>Patient Disease Description :</b> <i>{{ $patient->description }}</i></p>
                                    <h4><b>Patient Mobile Number :</b> <i>{{ $patient->patient_mobile }}</i></h4>
                                    <p><b>Prescription Issue Date :</b> <i>{{ $patient->issue_date }}</i></p>
                                    <p><b>Prescription expire Date :</b> <i>{{ $patient->expire_date }}</i></p>

                                    <br>
                                    <hr>
                                    <button class="btn btn-info">Print</button>
                                </div>
                                <!-- table-wrapper -->
                               
                            </div>
                            <!-- section-wrapper -->
                        </div>
                    </div>
                </div>
                

@endsection

