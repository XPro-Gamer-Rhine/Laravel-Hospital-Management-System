@extends('Authority.layouts.design')


@section('content')

<div class="page-header">
                        <h4 class="page-title">Edit Doctor's Specilization </h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit-Fields</li>
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
                            <form method="post" class="card" action="{{ url('/edit/field/'.$fields->id) }}">
                                {{ csrf_field() }}
                                <div class="card-header">
                                    <h3 class="card-title">Medical Fields</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Field Name</label>
                                        <input type="text" class="form-control is-valid state-valid" name="field_name" placeholder="Valid Medical Field.." value="{{ $fields->field_name }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Field Details</label>
                                        <textarea class="form-control" name="field_description" rows="7" placeholder="Describe the Field">{{ $fields->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Tags/References</label>
                                        <select class="form-control select2" data-placeholder="Choose Medical Field Tag" multiple="" name="tags[]">
                                            @foreach($tags as $tag)
                                                @foreach($field_tags as $ftag)
                                                <option value="{{ $tag->id }}" @if($tag->id == $ftag->tag_id ) selected="selected"  @endif>
                                                    {{ $tag->name }}
                                                </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    

                                    

                                    <div class="form-group">
                                        <label class="form-label">Field URL</label>
                                        <input type="text" class="form-control is-valid state-valid" name="url" placeholder="URL For Medical Field.." value="{{ $fields->url }}">
                                    </div>

                                    <div class="form-group">
                                                <div class="form-label">Toggle switch single</div>
                                                <label class="custom-switch">
                                                    <input type="checkbox" name="status" class="custom-switch-input" value="1" @if($fields->status == 1) Checked @endif>
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
                                        <button type="submit" class="btn btn-primary ml-auto">Edit data</button>
                                    </div>
                                </div>
                            </form>
</div>

@endsection