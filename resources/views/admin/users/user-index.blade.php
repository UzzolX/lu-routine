@extends('admin.index')
@section('title', 'Pie Data')
@section('content')



<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            User List
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group mb-10">
            <div class="alert alert-custom alert-default" role="alert">
                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                <div class="alert-text">
                    A section to view all the available user.
                </div>
            </div>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">User Email</th>
                    <th scope="col">User Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(App\User::all() as $cat)
                <tr class="table-success">

                    <td scope="row">{{$cat->name}}</td>
                    <td>{{$cat->email}}</td>
                    <td>{{$cat->user_type}}</td>
                    <td>

                        <a href="{{route('user.makeadmin',[$cat->id])}}">
                            <button type="button" class="btn btn-info btn-sm">Make Admin</button>
                        </a>
                        <a href="{{route('user.makevisitor',[$cat->id])}}">
                          <button type="button" class="btn btn-info btn-sm">Make Visitor</button>
                      </a>
                        
                        <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal{{$cat->id}}">
                    Delete
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          </button>
                        </div>
                        <div class="modal-body">
                          Do you want to delete?
                        </div>
                        <form action="{{route('user.destroy')}}" method="POST">@csrf
                          <div class="modal-footer">
                            <input type="hidden" name="id" value="{{$cat->id}}">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                        

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection
