@extends('Authority.layouts.design')


@section('content')

<div class="page-header">
                        <h4 class="page-title">Add Doctor's Specilization </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add-Fields</li>
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
                            <form method="post" class="card" action="{{ url('/fields/add-medical-fields') }}">
                                {{ csrf_field() }}
                                <div class="card-header">
                                    <h3 class="card-title">Medical Fields</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Field Name</label>
                                        <input type="text" class="form-control is-valid state-valid" name="field_name" placeholder="Valid Medical Field..">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Field Details</label>
                                        <textarea class="form-control" name="field_description" rows="7" placeholder="Describe the Field"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Tags/References</label>
                                        <select class="form-control select2" data-placeholder="Choose Medical Field Tag" multiple="" name="tags[]">
                                            @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">
                                                {{ $tag->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Field URL</label>
                                        <input type="text" class="form-control is-valid state-valid" name="url" placeholder="URL For Medical Field..">
                                    </div>
                                    <div class="form-group">
                                                <div class="form-label">Toggle switch single</div>
                                                <label class="custom-switch">
                                                    <input type="checkbox" name="status" class="custom-switch-input" value="1">
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description">Keep This Field Active</span>
                                                </label>
                                    </div>
                                    {{-- <div class="form-group m-0">
                                        <label class="form-label">Invalid Number</label>
                                        <input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid Number..">
                                        <div class="invalid-feedback">Invalid feedback</div>
                                    </div> --}}
                                    
                                <div class="card-footer text-right">
                                    <div class="d-flex">
                                        <input type="reset" name="reset" value="Reset" class="btn btn-danger">
                                        <button type="submit" class="btn btn-primary ml-auto">Send data</button>
                                    </div>
                                </div>
                            </form>
</div>

@endsection