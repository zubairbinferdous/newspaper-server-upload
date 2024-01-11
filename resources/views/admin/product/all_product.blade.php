@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 3%">
                <div class="card">
                    <h5 class="card-header">All Post Area </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Post Title</th>
                                    <th>Post image 1</th>
                                    <th>Post image 2</th>
                                    <th>Post Test area</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($product as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        @php
                                            $longText = $item->product_name;
                                            $longMassege = $item->product_message;
                                        @endphp
                                        <td>{{ Str::limit($longText, 20) }}</td>
                                        <td><img src="{{ asset($item->product_img) }}" alt=""
                                                style="width: 60px; height:60px">
                                        </td>
                                        <td><img src="{{ asset($item->product_img2) }}" alt=""
                                                style="width: 60px; height:60px">
                                        </td>
                                        <td>{{ Str::limit($longMassege, 20) }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('edit.product', $item->id) }}"><i
                                                            class="ti ti-pencil me-1"></i> Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('product.delete', $item->id) }}"><i
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
