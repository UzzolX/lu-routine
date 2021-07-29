@extends('admin.index')
@section('content')
<style>
    input.blogupimage.form-control {
	padding: 22px 15px;
	background: #36ccba;
	height: 70px;
	cursor: pointer;
}
</style>
<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Update Course
        </h3>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="{{route('teacher.update',[$teacher->id])}}"  method="post">
        
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Teacher Code</label>
                <input type="text" name="teacher_code" class="form-control{{ $errors->has('teacher_code') ? ' is-invalid' : '' }}"
                    value="{{$teacher->teacher_code}}" placeholder="teacher_code" />
                @if ($errors->has('teacher_code'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('teacher_code') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Teacher Name</label>
                <input type="text" name="teacher_name" class="form-control{{ $errors->has('teacher_name') ? ' is-invalid' : '' }}"
                    value="{{$teacher->teacher_name}}" placeholder="teacher_name" />
                @if ($errors->has('teacher_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('teacher_name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Teacher Position</label>
                <input type="text" name="teacher_position" class="form-control{{ $errors->has('teacher_position') ? ' is-invalid' : '' }}"
                    value="{{$teacher->teacher_position}}" placeholder="teacher_position" />
                @if ($errors->has('teacher_position'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('teacher_position') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection