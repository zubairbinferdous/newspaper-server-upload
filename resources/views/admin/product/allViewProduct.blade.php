@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">View Post</small>
                    </div>
                    <div class="card-body">



                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Post Title</label>
                                <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                    placeholder="" value="{{ $product->product_name }}" readonly />
                            </div>

                            <div class="md-3">
                                <label class="form-label" for="multicol-country">category</label>
                                <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                    placeholder="" value="{{ $product->catagory->cate_name }}" readonly />
                            </div>

                            {{-- <div class="md-3">
                                <label class="form-label" for="multicol-country">Sub category</label>
                                <select name="sub_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true" readonly>
                                    <option value=""> {{ $product->subCategory->Sub_category }}</option>
                                </select>
                            </div> --}}

                            <div class="md-3">
                                <label class="form-label" for="multicol-country">Area Select</label>
                                <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                    placeholder="" value="{{ $product->site_id }}" readonly />
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Post feature image one</label>
                                <img src="{{ asset($product->product_img) }}" alt="hello" style="width:100px">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Post feature image two</label>
                                @if ($product->product_img2)
                                    <img src="{{ asset($product->product_img2) }}" alt="hello" style="width:100px">
                                @endif
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Post Text area</label>
                                <div class="col-sm-12">
                                    <p> {!! $product->product_message !!} </p>
                                </div>
                            </div>

                            {{-- <button type="submit" class="btn btn-primary">Add</button> --}}
                        </form>
                    </div>

                </div>
            </div>

        </div>
        <script>
            $('#summernote').summernote({
                placeholder: 'Hello',
                tabsize: 2,
                height: 320,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>
    @endsection
