@extends('admin.index')
@section('content')
<a href="{{ route('dashboard.pdf') }}">
<button style="width: 100px; margin:20px" type="button" class="btn btn-primary btn-sm">PDF</button>
</a>
@include('admin.dashboard.days.sunday.sunday-index')
@include('admin.dashboard.days.monday.monday-index')
@include('admin.dashboard.days.tuesday.tuesday-index')
@include('admin.dashboard.days.wednesday.wednesday-index')
@include('admin.dashboard.days.thursday.thursday-index')
@include('admin.dashboard.days.saturday.saturday-index')
@include('admin.dashboard.days.friday.friday-index')
@endsection