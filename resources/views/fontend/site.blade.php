@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Site Control</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Brand pic</label>
                                <input type="file" name="logo_img" class="form-control" id="basic-default-upload-file" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Brand pic</label>
                                <input type="file" name="logo_img" class="form-control" id="basic-default-upload-file" />
                            </div>

                            <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Add
                                Brand
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
