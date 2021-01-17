@extends('Authority.layouts.design')


@section('content')

<div class="page-header">
                        <h4 class="page-title">Add Tags or KeyWords </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add-Tag</li>
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
                            <form method="post" class="card" action="{{ url('/reference') }}">
                            	{{ csrf_field() }}
                                <div class="card-header">
                                    <h3 class="card-title">Tags</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Tag Name</label>
                                        <input type="text" class="form-control is-valid state-valid" name="tag_name" placeholder="Use A user friendly key word">
                                    </div>

                                <div class="card-footer text-right">
                                    <div class="d-flex">
                                        <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                                        <button type="submit" class="btn btn-primary ml-auto">Save Tag</button>
                                    </div>
                                </div>
                            </form>
</div>

@endsection