@extends('fontend.master')
@section('master')
    <div class="single-news-area">
        <div class="container">
            <div class="row ">
                <div class="col-md-9">
                    <!-- post-category-data  -->
                    {{-- <div class="category-area-blog">
                        <a href="">মোবাইল ফোন</a>
                    </div> --}}
                    <!-- single-area-post  -->
                    <div class="row">
                        {{-- <div class="row">
                            <div class="col-md-8">
                                <div class="new-data-one">
                                    <img src="./images/prothomalo-computer.webp" alt="">
                                    <div class="new-data-area">
                                        <a href="">টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি
                                            ব্র্যান্ড
                                            ইনফিনিক্স।</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="new-area-two-left-side">
                                    <img src="./images/prothomalo-computer.webp" alt="">
                                    <h5>
                                        মিড রেঞ্জের অলরাউন্ড ফাস্ট চার্জিং নিয়ে গত জুলাইয়ে বাজারে আসে
                                    </h5>

                                    <span class="para_two">
                                        মিড রেঞ্জের অলরাউন্ড ফাস্ট চার্জিং নিয়ে গত জুলাইয়ে বাজারে আসে ইনফিনিক্স নোট
                                        ৩০ প্রো।
                                        মিড রেঞ্জের অলরাউন্ড ফাস্ট চার্জিং নিয়ে |অলরাউন্ড ফাস্ট চার্জিং নিয়ে
                                    </span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="blog-border-bottom mt-05 "></div>


                        <div class="row mt-05 ">

                            @foreach ($posts as $item)
                                @php
                                    $longText = strip_tags($item->product_message);
                                    $Text = strip_tags($item->product_message);
                                @endphp

                                <div class="col-md-4">
                                    <div class="new-area-two-left-side">
                                        <img src="{{ asset($item->product_img) }}" alt="" style="height: 200px">
                                        <h5>
                                            <a href=" {{ url('singlePost/' . $item->id) }} ">
                                                {{ Str::limit($Text, 40) }}</a>
                                        </h5>
                                        <span class="para_two">
                                            {!! Str::limit($longText, 70) !!}
                                        </span>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <div class="blog-border-bottom mt-05 "></div>
                    </div>


                    <!-- shera-area  -->

                </div>
                <div class="col-md-3">
                    <div class="row side_bar">
                        <div class="">
                            <div class="computer_title text-center mt-30">
                                <a href="">অতি সম্প্রতি </a>
                            </div>
                            @php
                                $main_slider = App\Models\product::where('site_id', 'sideBar')
                                    ->orderBy('id', 'DESC')
                                    ->get();
                            @endphp

                            @foreach ($main_slider as $item)
                                <div class="computer-data-two">
                                    <a href=" {{ url('singlePost/' . $item->id) }} "> {{ $item->product_name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row m-20">
            <div class="title-data">
                <h6>রিলেটেড নিউস</h6>
            </div>
        </div>
    </div>
    <div class="tech-talk">
        <div class="container b_botom">
            <div class="row">
                <div class="col-md-2">

                    @php
                        $main_slider = App\Models\product::where('site_id', 'Related_news')
                            ->orderBy('id', 'DESC')
                            ->get();
                    @endphp

                    @foreach ($main_slider as $item)
                        <div class="tech-data-area text-center">
                            <img src="{{ asset($item->product_img) }}" alt="" style="height: 200px">
                            <a href=" {{ url('singlePost/' . $item->id) }} "> {{ $item->product_name }}</a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    </div>
@endsection