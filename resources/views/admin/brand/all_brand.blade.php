@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 15%">
                <div class="card">
                    <h5 class="card-header">All Brand Data</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>Sl</th>
                                    <th>Brand data</th>
                                    <th>Brand images</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($brands as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td>{{ $item->brand_name }}</td>
                                        <td><img src="{{ asset($item->brand_img) }}" alt=""
                                                style="width: 60px; height:60px"></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit.brand', $item->id) }}"><i
                                                            class="ti ti-pencil me-1"></i> Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('brand.delete', $item->id) }}"><i
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
