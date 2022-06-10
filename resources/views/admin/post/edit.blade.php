@extends('admin.dashboard')
@section('content')
    <div class="card mt-3">
        <div class="card-header">
            <h3><b>Edit Post</b></h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/posts/' . $post->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-group">
                    <label for="category"><b>Category</b></label>
                    <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image"><b>Image</b></label>
                    <img src="{{ asset('storage/post-images/' . $post->image) }}" alt="" width="70px">
                    <input type="file" name="image" id="image" class="form-control mt-3"
                        value="{{ $post->image ?? old('image') }}">
                </div>
                <div class="form-group">
                    <label for="title"><b>Title</b></label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="Enter user title" value="{{ $post->title ?? old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content"><b>Content</b></label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror"
                        placeholder="Enter content">{{ $post->content ?? old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark btn-sm mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
