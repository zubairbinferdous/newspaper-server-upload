@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Add New Post</small>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Post title</label>
                                <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                    placeholder="" />
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">product stock</label>
                                <input type="text" name="product_qty" class="form-control" id="basic-default-fullname"
                                    placeholder="" />
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
                                <label class="form-label" for="multicol-country"> Sub category</label>
                                <select name="sub_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value='{{ 0 }}'> Null </option>
                                    @foreach ($sub as $sub)
                                        <option value=" {{ $sub->id }}"> {{ $sub->Sub_category }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="md-3">
                                <label class="form-label" for="multicol-country"> Area Select</label>
                                <select name="site_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value='{{ '0' }}'> Null </option>
                                    <option value='{{ 'main_slider' }}'> Main slider </option>
                                    <option value='{{ 'main_area_with_out_slider' }}'> Main area with out slider </option>
                                    <option value='{{ 'Today_news' }}'> Today_news </option>
                                    <option value='{{ 'Today_News_main' }}'> Today News main </option>
                                    <option value='{{ 'Today_happen ' }}'> Today happen </option>
                                    <option value='{{ 'tech_area ' }}'> Tech area</option>
                                    <option value='{{ 'Bangladesh_right_side ' }}'> Bangladesh right side</option>
                                    <option value='{{ 'Bangladesh_right_single_data ' }}'> Bangladesh right single data
                                    </option>
                                    <option value='{{ 'Bangladesh_main_data ' }}'> Bangladesh main data</option>
                                    <option value='{{ 'Bangladesh_left_side ' }}'> Bangladesh left side</option>
                                    <option value='{{ 'Bangladesh_left_single_data ' }}'> Bangladesh left single data
                                    </option>

                                    <option value="software_right">software right</option>
                                    <option value="software_left ">software left </option>
                                    <option value="software_main">software main</option>

                                    <option value="brand_story">brand story</option>
                                    <option value="brand_right">brand rignt</option>
                                </select>
                            </div>



                            {{-- 
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">product Price</label>
                                <input type="text" name="product_price" class="form-control" id="basic-default-fullname"
                                    placeholder="" />
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Post pic 1</label>
                                <input type="file" name="product_img" class="form-control" id="basic-default-upload-file"
                                    required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Post pic 2</label>
                                <input type="file" name="product_img2" class="form-control"
                                    id="basic-default-upload-file" required />
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <label class="col-sm-2 col-form-label" for="basic-default-message">Post text
                                        area</label>
                                    <textarea name="product_message" id="summernote" placeholder="">
                                    </textarea>
                                </div>
                            </div>



                            <button type="submit" class="btn btn-primary">Add News</button>
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