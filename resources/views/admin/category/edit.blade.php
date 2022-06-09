@extends('admin.dashboard')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h3><b>Edit Category</b></h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/categories/' . $category->id) }}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter user name" value="{{ $category->name ?? old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark btn-sm mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
