@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Add User</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" name="name" class="form-control" id="basic-default-fullname"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Site Role </label>
                                <input type="text" name="username" value="editor" class="form-control"
                                    id="basic-default-fullname" required readonly />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">email</label>
                                <input type="text" name="email" class="form-control" id="basic-default-fullname"
                                    required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">password</label>
                                <input type="password" name="password" class="form-control" id="basic-default-fullname"
                                    required />
                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Add
                                Brand</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
