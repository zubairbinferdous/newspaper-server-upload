@extends('admin.admin_dashboard')
@section('admin')
    <div class="container  mt-150">
        <div class="card mb-4 ">
            <h5 class="card-header"> User Profile Details</h5>
            <!-- Account -->
            <hr class="my-0">
            <div class="card-body ">

                <div class="row">
                    <div class="mb-3 col-md-6 fv-plugins-icon-container">
                        <label for="firstName" class="form-label"> Name</label>
                        <input class="form-control" type="text" id="firstName" name="firstName"
                            value=" {{ $user->name }}" autofocus="" readonly>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <div class="mb-3 col-md-6 fv-plugins-icon-container">
                        <label for="lastName" class="form-label">E-mail</label>
                        <input class="form-control" type="text" name="lastName" id="lastName"
                            value="{{ $user->email }}" readonly>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    {{-- <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">password</label>
                        <input class="form-control" type="password" id="email" name="email"
                            value="{{ $user->password }}" placeholder="" readonly>
                    </div> --}}

                    <a href="{{ route('userInfo', $user->id) }}" class="update_user">Update User information</a>
                </div>

            </div>

        </div>
    @endsection
