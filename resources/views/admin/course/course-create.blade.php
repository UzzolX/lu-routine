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
            Add New Course
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
    <form action="{{route('course.store')}}"  method="post">
        
        @csrf
        
        <div class="card-body">
            <div class="form-group">
                <label>Course Code</label>
                <input type="text" name="course_code" class="form-control{{ $errors->has('course_code') ? ' is-invalid' : '' }}"
                    value="{{ old('course_code') }}" placeholder="course_code" />
                @if ($errors->has('course_code'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('course_code') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Course Title</label>
                <input type="text" name="course_title" class="form-control{{ $errors->has('course_title') ? ' is-invalid' : '' }}"
                    value="{{ old('course_title') }}" placeholder="course_title" />
                @if ($errors->has('course_title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('course_title') }}</strong>
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