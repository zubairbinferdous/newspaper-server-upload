@extends('admin.admin_dashboard')
@section('admin')
    <div class="container  mt-150">
        <div class="card mb-4 ">
            <h5 class="card-header"> Reset Password</h5>
            <!-- Account -->
            <hr class="my-0">
            <div class="card-body ">
                <div class="row">
                    <form method="POST" action="{{ route('update.pass') }}" enctype="multipart/form-data">
                        @csrf
                        <input name="id" type="hidden" value="{{ $user->id }}">
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Reset Password</label>
                            <input class="form-control" type="password" id="email" name="password" value=""
                                placeholder="{{ $user->password }}" required>
                        </div>
                        <button type="submit" class="update_password">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
