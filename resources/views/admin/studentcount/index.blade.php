@extends('admin.dashboard')
@section('content')
    <div class="card mt-2">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color:RGB(255, 255, 255) ;">
                    {{-- <a href="{{ url('admin/skills/create') }}">
                        <p align="right"><button class="btn btn-sm btn-dark mb-2"><i class="fa fa-plus-circle"> Add
                                    Student Count</i></button></p>
                    </a> --}}
                    @if (Session('successAlert'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <strong>{{ Session('successAlert') }}</strong>
                            <button class="close" data-dismiss="alert">&times;</button>
                        </div>
                    @endif
                    @if ($studentcounts->count() < 1)
                        <form action="{{ url('admin/studentcounts/store') }}">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="">Count</label>
                                    <div class="input-group">
                                        <input type="number" name="count"
                                            class="form-control  @error('count') is-invalid @enderror">
                                        <button class="btn btn-dark">Create</button>
                                        @error('count')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                    <thead>
                        <tr>
                            <th>Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($student)
                        <tr>
                            <td>{{ $student->count }}</td>
                            <td>
                                <button class="btn btn-outline-dark btn-sm " style="border-radius:5px;" id="addButton"><i
                                        class="fa fa-plus-circle"></i> Add More</button>
                                <div class="col-md-4">
                                    <form action="{{ url('admin/studentcounts/'.$student->id.'/update') }}"
                                        method="POST" id="addmore" style="display:none;">
                                        @csrf
                                        <div class="input-group mt-3">
                                            <input type="number" name="count" class="form-control  @error('count') is-invalid @enderror">
                                            <button class="btn btn-dark btn-sm" type="submit"><i
                                                    class="fa fa-plus-circle"></i> Add</button>
                                                   
                                        </div>
                                        @error('count')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-3">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function() {
            $("#addButton").click(function() {
                $("#addmore").css('display', 'block');
                $(this).css('display', 'none');
            });
        });
    </script>
@endsection
