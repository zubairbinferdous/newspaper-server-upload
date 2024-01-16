@extends('admin.admin_dashboard')
@section('admin')
    {{-- <div class="container">
        <h1>upload video</h1>
        <div class="row">
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
        </div>
    </div> --}}
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Upload video</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('upload.video') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Video Title</label>
                                <input type="text" name="title" class="form-control" id="basic-default-fullname"
                                    required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Video File</label>
                                <input type="file" name="video" class="form-control" id="basic-default-upload-file"
                                    accept="video/mp4" />
                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Add
                                Video</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
