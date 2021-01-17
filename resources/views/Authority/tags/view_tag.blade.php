@extends('Authority.layouts.design')

@section('content')

<div class=" content-area">
                    <div class="page-header">
                        <h4 class="page-title">View Tags</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View-Tags</li>
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
                                    <div class="card-title">All Tags</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
                                            <thead>
                                                <tr class="border-bottom-0">
                                                    <th class="wd-15p">Tag ID</th>
                                                    <th class="wd-15p">Tag name</th>
                                                    <th class="wd-20p">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($tags as $tag)
                                                <tr class="border-top-0">
                                                    <td>{{ $tag->id }}</td>
                                                    <td>{{ $tag->name }}</td>
                                                    <td><a href="#"><span class="badge badge-info">Edit</span></a> &emsp; <a href="{{ url('/delete/tag/'.$tag->id) }}"><span class="badge badge-danger">Delete</span></a></td>
                                                    
                                                    
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