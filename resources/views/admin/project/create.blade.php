@extends('admin.dashboard')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h3><b>Create Project</b></h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/projects') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter Skill" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url"><strong>Url</strong></label>
                    <input type="text" name="url" id="url"
                        class="form-control @error('url') is-invalid @enderror" rows="3"
                        placeholder="Enter url">{{ old('url') }}
                    @error('url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark btn-sm mt-3">Create</button>
            </form>
        </div>
    </div>
@endsection
