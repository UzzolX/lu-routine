@extends('admin.index')
@section('content')
<style>
    .create {
        display: block;
        margin-bottom: 20px;

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
        <a href="{{route('teacher.create')}}" enctype="multipart/form-data">
            <button type="button" class="btn btn-info btn-sm">Add Teacher</button>

        </a>
    </div>

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif

    <table class="table" style="text-align: center;">
        <thead>
            <tr>
                <th class="line" scope="col">Teacher Code</th>
                <th class="line" scope="col">Teacher Name</th>
                <th class="line" scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-success">

            @foreach ($teacher as $row)
            <tr>
                <td>{{str_limit($row->teacher_code,30)}}</td>
                <td>{{str_limit($row->teacher_name,30)}}</td>
                <td>
                    <a class=" btn-bg-dark" href="{{route('teacher.edit',[$row->id])}}"> <button type="button" class="btn btn-info btn-sm">Edit</button>
                    </a>
                    <a href="{{route('teacher.delete',[$row->id])}}">
                        <button type="button" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$teacher->links()}}
</div>

@endsection
