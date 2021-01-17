@extends('Authority.layouts.design')

@section('content')

<div class=" content-area">
                    <div class="page-header">
                        <h4 class="page-title">View Fields</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View-Fields</li>
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
                                    <div class="card-title">All Medical Fields</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
                                            <thead>
                                                <tr class="border-bottom-0">
                                                    <th class="wd-15p">Field ID</th>
                                                    <th class="wd-15p">Field name</th>
                                                    <th class="wd-15p">Field URL</th>
                                                    <th class="wd-15p">Field Tags</th>
                                                    <th class="wd-15p">Field Status</th>
                                                    <th class="wd-20p">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	@foreach($fields as $field)
                                                <tr class="border-top-0">
                                                    <td>{{ $field->id }}</td>
                                                    <td>{{ $field->field_name }}</td>
                                                    <td>{{ $field->url }}</td>
                                                    <td>
                                                    @foreach($field->tags as $tag)
                                                        <span class="tag tag-purple">{{ $tag->name }}</span>
                                                    @endforeach
                                                    </td>
                                                    <td>@if($field->status == 1) <span class="badge badge-pill badge-success">Active</span>  @else <span class="badge badge-pill badge-danger">Inactive</span> @endif</td>
                                                    <td><a href="{{ url('/edit/field/'.$field->id) }}"><span class="badge badge-info">Edit</span></a> &emsp; <a href="javascript:" class="deleteField" rel="{{ $field->id }}" rel1="field"><span class="badge badge-danger">Delete</span></a></td>
                                                    
                                                    
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

