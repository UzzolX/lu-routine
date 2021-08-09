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
            Update Room
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
    <form action="{{route('room.update',[$room->id])}}"  method="post">
        
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>room Code</label>
                <input type="text" name="room_code" class="form-control{{ $errors->has('room_code') ? ' is-invalid' : '' }}"
                    value="{{$room->room_code}}" placeholder="room_code" />
                @if ($errors->has('room_code'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('room_code') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Room Title</label>
                <input type="text" name="room_title" class="form-control{{ $errors->has('room_title') ? ' is-invalid' : '' }}"
                    value="{{$room->room_title}}" placeholder="room_title" />
                @if ($errors->has('room_title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('room_title') }}</strong>
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