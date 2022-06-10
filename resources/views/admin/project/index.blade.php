@extends('admin.dashboard')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
                    <a href="{{ url('admin/projects/create') }}">
                        <p align="right"><button class="btn btn-sm btn-dark mb-2"><i class="fa fa-plus-circle"> Add
                                    Project</i></button></p>
                    </a>
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
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->url }}</td>
                                <td>
                                    <form action="{{ url('admin/projects/' . $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('admin/projects/' . $project->id . '/edit') }}"><button
                                                type="button" class="btn btn-outline-success btn-sm mb-2"
                                                style="border-radius:5px;"><i class="fa fa-edit"></i> Edit</button></a>
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
