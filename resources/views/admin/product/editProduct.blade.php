@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Edit Post</small>
                    </div>
                    <div class="card-body">



                        <form method="POST" action="{{ route('product.update') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="old_img" value="{{ $product->brand_images }}">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Post Title</label>
                                <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                    placeholder="" value="{{ $product->product_name }}" />
                            </div>

                            {{-- <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">product stock</label>
                                <input type="text" name="product_qty" class="form-control" id="basic-default-fullname"
                                    placeholder="" value="{{ $product->product_qty }}" />
                            </div> --}}


                            <div class="md-3">
                                <label class="form-label" for="multicol-country">category</label>
                                <select name="category_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    @foreach ($category as $cate)
                                        <option value=" {{ $cate->id }}"> {{ $cate->cate_name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="md-3">
                                <label class="form-label" for="multicol-country">Sub category</label>
                                <select name="sub_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    @foreach ($sub as $sub)
                                        <option value=" {{ $sub->id }}"> {{ $sub->Sub_category }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="md-3">
                                <label class="form-label" for="multicol-country">Area Select</label>
                                <select name="site_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value='{{ $product->site_id }}'> {{ $product->site_id }} </option>
                                    <option value='{{ '0' }}'> Null </option>
                                    <option value='{{ 'main_slider' }}'> Main slider </option>
                                    <option value='{{ 'main_area_with_out_slider' }}'> Main area with out slider </option>
                                    <option value='{{ 'today_news' }}'> Today_news </option>
                                    <option value='{{ 'today_News_main' }}'> Today News main </option>
                                    <option value='{{ 'today_happen ' }}'> Today happen </option>
                                    <option value='{{ 'tech_area ' }}'> Tech area</option>
                                    <option value='{{ 'bangladesh_right_side ' }}'> Bangladesh right side</option>
                                    <option value='{{ 'bangladesh_right_single_data ' }}'> Bangladesh right single data
                                    </option>
                                    <option value='{{ 'bangladesh_main_data ' }}'> Bangladesh main data</option>
                                    <option value='{{ 'bangladesh_left_side ' }}'> Bangladesh left side</option>
                                    <option value='{{ 'bangladesh_left_single_data ' }}'> Bangladesh left single data
                                    </option>

                                    <option value="software_right">Software right</option>
                                    <option value="software_left ">Software left </option>
                                    <option value="software_main">Software main</option>

                                    <option value="brand_story">Brand story</option>
                                    <option value="brand_right">Brand rignt</option>

                                    <option value="game">Game</option>

                                    <option value="gadgets_right">Gadgets left</option>
                                    <option value="gadgets_left">Gadgets left</option>

                                    <option value="related_news">Related news</option>

                                    <option value="sideBar_one">SideBar one</option>
                                    <option value="sideBar_two">SideBar two</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Post feature image one</label>
                                <input type="file" name="product_img" class="form-control" id="basic-default-upload-file"
                                    required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Post feature image two</label>
                                <input type="file" name="product_img2" class="form-control"
                                    id="basic-default-upload-file" required />
                            </div>

                            {{-- <div class="mb-3">
                            <label class="form-label" for="basic-default-upload-file">multi pic</label>
                            <input type="file" name="multi_img[]" class="form-control" id="basic-default-upload-file"
                                required multiple />
                        </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Post Text area</label>
                                <div class="col-sm-12">
                                    <textarea rows="" cols="" name="product_message" id="summernote" placeholder=""
                                        aria-describedby="basic-icon-default-message2">
                                        {{ $product->product_message }}
                                </textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
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
