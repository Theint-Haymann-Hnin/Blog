@extends('admin.dashboard')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
                    <a href="{{ url('admin/posts/create') }}">
                    </a>
                    @if (Session('successAlert'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <strong>{{ Session('successAlert') }}</strong>
                            <button class="close" data-dismiss="alert">&times;</button>
                        </div>
                    @endif
                    <thead>
                    </thead>
                    <tbody>
                        @foreach ($comments as $index => $comment)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>
                                    <form action="{{ url('admin/comment/' . $comment->id . '/show_hide') }}" method="POST">
                                        @csrf
                                        @if ($comment->status == 'show')
                                            <a href=""><button type="submit" class="btn btn-outline-danger btn-sm "
                                                    style="border-radius:5px;"><i class="fa fa-edit"></i> Hide</button>
                                            </a>
                                        @else
                                            <a href=""><button type="submit" class="btn btn-outline-success btn-sm "
                                                    style="border-radius:5px;"><i class="fa fa-edit"></i> Show</button>
                                            </a>
                                        @endif
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
