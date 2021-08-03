@extends('admin.index')
@section('content')	
<style>
    .create {
        display: block;
        margin-bottom: 20px;
        margin-top: 10px;
    }

    .create a button {
        padding: 10px 20px;
        font-size: 16px;
        border: 0px;
        background: #36ccba !important;
        text-align: center;
    }

</style>
<div class="col-xl-12">
    <div class="create">
        <a href="{{route('monday.create')}}">
            <button type="button" class="btn btn-info btn-sm">Add Data</button>

        </a>
    </div>
@if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
<table class="table table-bordered border-primary">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Section</th>
            <th scope="col">Batch</th>
            <th scope="col">9:00 AM - 09:50 AM</th>
            <th scope="col">10:00 AM - 10:50 AM</th>
            <th scope="col">11:00 AM - 11:50 AM</th>
            <th scope="col">12:00 PM - 12:50 PM</th>
            <th scope="col">Break</th>
            <th scope="col">02:00 PM - 02:50 PM </th>
            <th scope="col">03:00 PM - 03:50 PM</th>
            <th scope="col">04:00 PM - 04:50 PM</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sunday as $row => $data)
        <tr>
            @if ($row == 0 || $row % 12 == 0)
            <th rowspan="12" style="writing-mode: vertical-rl; text-orientation: upright; text-align:center">Sunday</th>
            @endif
            <td>{{$data->section}}</td>
            <td>{{$data->batch}}</td>
            <td>{{$data->nineAM_ninefiftyAM}}</td>
            <td>{{$data->tenAM_tenfiftyAM}}</td>
            <td>{{$data->elevenAM_elevenfiftyAM}}</td>
            <td>{{$data->twelvePM_twelvefiftyPM}}</td>
            @if ($row == 0 || $row % 12 == 0)
            <td rowspan="12" style="writing-mode: vertical-rl; text-orientation: mixed; text-align:center">Prayer &
                Lunch Break ( 01:00 PM - 01:50 PM)</td>
            @endif
            <td>{{$data->twoPM_twofiftyPM}}</td>
            <td>{{$data->threePM_threefiftyPM}}</td>
            <td>{{$data->fourPM_fourfiftyPM}}</td>
            <td>
                <a class=" btn-bg-dark" href="{{route('sunday.edit',[$data->id])}}"> <button type="button"
                        class="btn btn-info btn-sm">Edit</button>
                </a>
                <a href="{{route('sunday.delete',[$data->id])}}">
                    <button type="button" class="btn btn-danger btn-sm">
                        Delete
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
