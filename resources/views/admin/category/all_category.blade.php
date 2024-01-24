@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 15%">
                <div class="card">
                    <h5 class="card-header">All Category Data</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>SI</th>
                                    <th>Category data</th>
                                    <th>Category img</th>
                                    <th>Menu</th>
                                    {{-- <th>Section</th> --}}
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($category as $key => $item)
                                    <tr>
                                        <td> {{ $key + 1 }} </td>
                                        <td>{{ $item->cate_name }}</td>
                                        <td><img src="{{ asset($item->category_img) }}" alt=""
                                                style="width: 60px; height:60px">
                                        <td>

                                            @if ($item->menu_active === 'deactive')
                                                <form action="{{ route('menu') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="menu" value="Active">
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-primary">{{ $item->menu_active }}
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('menu') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="menu" value="Deactive">
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <button type="submit" class="btn btn-primary">{{ $item->menu_active }}
                                                    </button>
                                                </form>
                                            @endif


                                        </td>
                                        {{-- <td>
                                            <form action="{{ route('section') }}" method="POST"></form>
                                            <button type="submit"
                                                class="btn btn-primary">{{ $item->section_active }}</button>
                                        </td> --}}

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('edit.cate', $item->id) }}"><i
                                                            class="ti ti-pencil me-1"></i> Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('cate.delete', $item->id) }}"><i
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
