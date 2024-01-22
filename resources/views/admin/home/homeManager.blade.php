@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row" style="margin: 1% 10%">
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
                                <input type="file" name="header_img" class="form-control" id="basic-default-upload-file"
                                    required />
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
                                <input type="file" name="footer_img" class="form-control" id="basic-default-upload-file"
                                    required />
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
        <div class="col-xl" style="margin: 0% 15%">
            <div class="card">
                <h5 class="card-header">All Home Logo</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>Sl</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($home as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>

                                    <td><img src="{{ asset($item->header_photo) }}" alt=""
                                            style="width: 60px; height:60px"></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                {{-- <a class="dropdown-item" href="{{ route('edit.brand', $item->id) }}"><i
                                                        class="ti ti-pencil me-1"></i> Edit</a> --}}
                                                <a class="dropdown-item"
                                                    href="{{ route('delete.logo.home', $item->id) }}"><i
                                                        class="ti ti-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl" style="margin: 0% 15%">
            <div class="card">
                <h5 class="card-header">All Footer Logo</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>Sl</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($footer as $key => $item)
                                <tr>
                                    <td> {{ $key + 1 }} </td>

                                    <td><img src="{{ asset($item->footer_photo) }}" alt=""
                                            style="width: 60px; height:60px"></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                {{-- <a class="dropdown-item" href="{{ route('edit.brand', $item->id) }}"><i
                                                        class="ti ti-pencil me-1"></i> Edit</a> --}}
                                                <a class="dropdown-item" href="{{ route('delete.logo', $item->id) }}"><i
                                                        class="ti ti-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
