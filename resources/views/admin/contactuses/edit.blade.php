@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Contact Us Entry</h2>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('contactuses.update', $contactUs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"
                          required>{{ $contactUs->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="bannerImage" class="form-label">Banner Image</label>
                <input type="file" class="form-control" id="bannerImage" name="bannerImage" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update Contact Us Entry</button>
        </form>
    </div>
@endsection
