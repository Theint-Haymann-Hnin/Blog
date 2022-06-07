@extends('admin.dashboard')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h3><b>Edit Skill</b></h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/skills/' . $skill->id) }}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter user name" value="{{ $skill->name ?? old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="percent"><b>Percent</b></label>
                    <input type="text" name="percent" id="percent"
                        class="form-control @error('percent') is-invalid @enderror" placeholder="Enter percent"
                        value="{{ $skill->percent ?? old('percent') }}">
                    @error('percent')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark btn-sm mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
