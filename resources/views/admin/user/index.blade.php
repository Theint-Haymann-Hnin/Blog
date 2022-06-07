@extends('admin.dashboard')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
                    @if (Session('successAlert'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <strong>{{ Session('successAlert') }}</strong>
                            <button class="close" data-dismiss="alert">&times;</button>
                        </div>
                    @endif
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->status }}</td>
                                <td>
                                    <form action="{{ url('admin/users/' . $user->id . '/delete') }}" method="POST">
                                        @csrf
                                        <a href="{{ url('admin/users/' . $user->id . '/edit') }}"><button type="button"
                                                class="btn btn-outline-success btn-sm " style="border-radius:5px;"><i
                                                    class="fa fa-edit"></i> Edit</button></a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                            style="border-radius:5px;"
                                            onclick="return confirm('Are you sure you want to delete?')"><i
                                                class="fa fa-trash"></i> Delete </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">

                </div>
            </div>
        </div>
    </div>
@endsection
