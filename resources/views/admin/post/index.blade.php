@extends('admin.dashboard')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
                    <a href="{{ url('admin/posts/create') }}">
                        <p align="right"><button class="btn btn-sm btn-dark mb-2"><i class="fa fa-plus-circle"> Add
                                    Post</i></button></p>
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
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/post-images/' . $post->image) }}" alt="" width="70px">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <textarea readonly>{{ $post->content }}</textarea>
                                </td>
                                <td>
                                    <form action="{{ url('admin/posts/' . $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('admin/posts/' . $post->id . '/edit') }}"><button type="button"
                                                class="btn btn-outline-success btn-sm " style="border-radius:5px;"><i
                                                    class="fa fa-edit"></i> Edit</button></a>
                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                            style="border-radius:5px;"
                                            onclick="return confirm('Are you sure you want to delete?')"><i
                                                class="fa fa-trash"></i> Delete </button>
                                        <a href="{{ url('admin/posts/' . $post->id) }}" class="btn btn-outline-dark btn-sm"
                                            style="border-radius:5px;"><i class="fa fa-comment"></i> Comment </a>
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
