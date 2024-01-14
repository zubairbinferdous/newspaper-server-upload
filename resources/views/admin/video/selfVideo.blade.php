@extends('admin.admin_dashboard')
@section('admin')
    <form action="{{ route('upload.video') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Video Title:</label>
        <input type="text" name="title" id="title" required>
        <br>

        <label for="video">Video File:</label>
        <input type="file" name="video" id="video" accept="video/mp4" required>
        <br>

        <button type="submit">Upload</button>
    </form>
@endsection
