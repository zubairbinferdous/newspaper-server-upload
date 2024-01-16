@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row" style="margin: 2% 10%">
            <div class="col-xl" style="">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Add Home Logo</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('header.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Add Header Logo </label>
                                <input type="file" name="header_img" class="form-control"
                                    id="basic-default-upload-file" />
                            </div>

                            <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Add
                                Header
                                Logo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl" style="">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Add Footer Logo</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('footer.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Add Footer Logo </label>
                                <input type="file" name="footer_img" class="form-control"
                                    id="basic-default-upload-file" />
                            </div>

                            <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Add
                                Footer
                                logo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
