@extends('admin.admin_dashboard')
@section('admin')
    <div class="container  mt-150">
        <div class="card mb-4 ">
            <h5 class="card-header">Update User Profile Details</h5>
            <!-- Account -->
            <hr class="my-0">
            <div class="card-body ">
                <form method="POST" action="{{ route('update.info') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input name="id" type="hidden" value="{{ $user->id }}">

                        <div class="mb-3 col-md-6 fv-plugins-icon-container">
                            <label for="firstName" class="form-label"> Name</label>
                            <input class="form-control" type="text" id="firstName" name="name"
                                value=" {{ $user->name }}" autofocus="">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="mb-3 col-md-6 fv-plugins-icon-container">
                            <label for="lastName" class="form-label">E-mail</label>
                            <input class="form-control" type="text" name="email" id="email"
                                value="{{ $user->email }}">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        {{-- <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">password</label>
                            <input class="form-control" type="password" id="email" name="password"
                                placeholder="{{ $user->password }}">
                        </div> --}}

                        <button type="submit" class="update_user">Update information</button>

                    </div>
                </form>
                {{-- 
                <form method="POST" action="{{ route('update.info') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <input type="hidden" name="old_img" value="{{ $brand->brand_images }}">

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Brand Name</label>
                        <input type="text" name="brand_name" class="form-control" id="basic-default-fullname" required
                            value="{{ $brand->brand_name }}" />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="basic-default-upload-file">Brand pic</label>
                        <input type="file" name="brand_img" class="form-control" id="basic-default-upload-file" />
                    </div>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Update
                        Brand</button>
                </form> --}}
            </div>

        </div>
    @endsection
