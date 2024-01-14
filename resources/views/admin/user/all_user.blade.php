@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 15%">
                <div class="card">
                    <h5 class="card-header">All User Data</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sl</th>
                                    <th>User name</th>
                                    <th>Site Role</th>
                                    <th>User email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($user as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->email }}</td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('user.delete', $item->id) }}"><i
                                                            class="ti ti-trash me-1"></i> Delete</a>
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
    </div>
@endsection
