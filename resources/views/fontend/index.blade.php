@extends('fontend.master')
@section('master')
    <div class="running-news-data">
        <div class="container bg_runing_data">
            <div class="row">
                <div class="col-md-1 p0">
                    <div class="running-news-title">
                        <h6>
                            শিরোনাম
                        </h6>
                    </div>
                </div>
                <div class="col-md-11 p0">
                    <div class="news-ticker-container">
                        <div class="news-ticker">
                            <ul>
                                <li><img src="{{ asset('fontend/images/ticke.jpeg') }}" alt="">২০২৩ সালে ইনফিনিক্সের
                                    সেরা যে ৩ ফোন
                                </li>
                                <li><img src="{{ asset('fontend/images/ticke.jpeg') }}" alt="">হ্যান্ডসেটের বৈধতা
                                    যাচাই করতে যা করবেন
                                </li>
                                <li><img src="{{ asset('fontend/images/ticke.jpeg') }}" alt="">ডেটা রোমিং চার্জ :
                                    বিদেশ ভ্রমণে যেভাবে খরচ
                                    সামাল দেবেন </li>
                                <!-- Add more news items as needed -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area  -->



    <div class="news-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p0">

                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">

                            @php
                                $main_slider = App\Models\product::where('site_id', 'main_slider')
                                    ->orderBy('id', 'ASC')
                                    ->limit(3)
                                    ->get();
                            @endphp

                            @foreach ($main_slider as $item)
                                <div class="carousel-item active">
                                    <div class="new-data-one">
                                        <img src=" {{ url($item->product_img) }}" alt="" class="image-fluid"
                                            style="height: 349px">
                                        <div class="new-data-area">
                                            <a href=" {{ url('singlePost/' . $item->id) }} "> {{ $item->product_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @php
                            $main_area_with_out_slider = App\Models\product::where('site_id', 'main_area_with_out_slider')
                                ->orderBy('id', 'ASC')
                                ->limit(4)
                                ->get();
                        @endphp

                        @foreach ($main_area_with_out_slider as $item)
                            <div class="carousel-item active">
                                <div class="new-data-one">
                                    <img src=" {{ url($item->product_img) }}" alt="" class="image-fluid"
                                        style="height: 349px">
                                    <div class="new-data-area">
                                        <a href=" {{ url('singlePost/' . $item->id) }} "> {{ $item->product_name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add-area  -->

    <div class="add-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p0">
                    <div class="add_area_img">
                        <img src=" {{ asset('fontend/images/add1.png ') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 p0">
                    <div class="add_area_img">
                        <img src="{{ asset('fontend/images/add3.jpeg ') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 p0">
                    <div class="add_area_img">
                        <img src=" {{ asset('fontend/images/add4.jpeg ') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 p0">
                    <div class="add_area_img">
                        <img src=" {{ asset('fontend/images/add1.png ') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news - area 2  -->

    <div class="news-area-two">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="border-top mbbb-5">
                        <div class="today-news">
                            <p>আজকের বাছাই</p>
                        </div>
                    </div>

                    <div class="row">
                        @php
                            $today_news = App\Models\product::where('site_id', 'today_news')
                                ->orderBy('id', 'ASC')
                                ->limit(2)
                                ->get();
                        @endphp

                        @foreach ($today_news as $item)
                            <div class="col-md-4 ">
                                <div class="row m-20">
                                    <div class="new-area-two-left-side">
                                        <img src=" {{ url($item->product_img) }} " alt="">
                                        <a href="">নোট ৩০ প্রো</a>
                                        <p>{{ $item->product_name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-md-4 ">
                            <div class="row m-20">
                                <div class="new-area-two-left-side">
                                    <img src="{{ asset('fontend/images/prothomalo-computer.webp ') }} " alt="">
                                    <a href="">নোট ৩০ প্রো</a>
                                    <p>মিড রেঞ্জের অলরাউন্ড ফাস্ট চার্জিং নিয়ে গত জুলাইয়ে বাজারে আসে ইনফিনিক্স নোট ৩০
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="new-area-two-left-side">
                                    <img src="{{ asset('fontend/images/prothomalo-computer.webp ') }}" alt="">
                                    <a href="">নোট ৩০ প্রো</a>
                                    <p>মিড রেঞ্জের অলরাউন্ড ফাস্ট চার্জিং নিয়ে গত জুলাইয়ে বাজারে আসে ইনফিনিক্স নোট ৩০</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class=" col-md-8 m-20">
                            @php
                                $today_News_main = App\Models\product::where('site_id', 'today_News_main')
                                    ->orderBy('id', 'ASC')
                                    ->limit(1)
                                    ->get();
                            @endphp

                            @foreach ($today_News_main as $item)
                                <div class="new-area-two-center-side">
                                    <img src="{{ url($item->product_img) }}" alt="">
                                    <a href="">নোট ৩০ প্রো</a>
                                    <p>{{ $item->product_name }}</p>product_message
                                    <span class="para_two">
                                        {{ $item->product_message }}
                                    </span>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="border-top mbbb-5">
                            <div class="today-news">
                                <a href="#">
                                    <p>অতি সম্প্রতি</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    @php
                        $today_happen = App\Models\product::where('site_id', 'today_happen')
                            ->orderBy('id', 'ASC')
                            ->limit(1)
                            ->get();
                    @endphp

                    @foreach ($today_happen as $item)
                        <div class="row m-20 ">
                            <div class="right-side-news-area border_bottom2">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="right-side-news">
                                            <p>{{ $item->product_name }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="right-side-news-img mt-05">
                                            <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- tech-talk-area  -->

    <div class="tech-talk m-20 p-300">
        <div class="container">
            <div class="title-data2">
                <h6>টেকটক চ্যানেল</h6>
            </div>
            <div class="row">
                @php
                    $tech_area = App\Models\product::where('site_id', 'tech_area')
                        ->orderBy('id', 'ASC')
                        ->limit(4)
                        ->get();
                @endphp

                @foreach ($tech_area as $item)
                    <div class="col-md-3">
                        <div class="tech-data-area">
                            <div class="category-area">
                                <a href="">এসইও</a>
                            </div>
                            <img src=" {{ url($item->product_img) }}" alt="" class="img-fluid">
                            <a href="">{{ $item->product_name }}</a>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="col-md-3">
                    <div class="tech-data-area">
                        <div class="category-area">
                            <a href="">মোবাইল</a>
                        </div>
                        <img src="{{ asset('fontend/images/sportOne.webp ') }}" alt="" class="img-fluid">
                        <a href="">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা অনুষ্ঠিত |

                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tech-data-area">
                        <div class="category-area">
                            <a href="">অ্যাপস</a>
                        </div>
                        <img src="{{ asset('fontend/images/sportOne.webp ') }}" alt="" class="img-fluid">
                        <a href="">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা অনুষ্ঠিত |
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tech-data-area">
                        <div class="category-area">
                            <a href="">এন্ড্রয়েড</a>
                        </div>
                        <img src="{{ asset('fontend/images/sportOne.webp ') }}" alt="" class="img-fluid">
                        <a href="">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা অনুষ্ঠিত |
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- software-area  -->

    <div class="container">
        <div class="row">
            <div class="title-area m-20">
                <div class="title-area m-20">
                    <div class="title-area m-20">
                        <div class="text-align-border  text-center">
                            <h1 class="border-text1">বাংলাদেশ</h1>
                            <h3 class="border-text2">বাংলাদেশ</h3>
                            <div class="line1"></div>
                            <div class="line2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @php
                    $bangladesh_right_side = App\Models\product::where('site_id', 'bangladesh_right_side')
                        ->orderBy('id', 'ASC')
                        ->limit(2)
                        ->get();
                @endphp

                @foreach ($bangladesh_right_side as $item)
                    <div class="row mb-20">
                        <div class="col-md-6 p0">
                            <div class="software-left-area">
                                <a href="">{{ $item->product_name }}</a>
                            </div>
                        </div>
                        <div class="col-md-6 p0">
                            <div class="software_left">
                                <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endforeach



                <div class="row">
                    @php
                        $bangladesh_right_single_data = App\Models\product::where('site_id', 'bangladesh_right_single_data')
                            ->orderBy('id', 'ASC')
                            ->limit(6)
                            ->get();
                    @endphp

                    @foreach ($bangladesh_right_single_data as $item)
                        <div class="software_data_left_side">
                            <a href="">{{ $item->product_name }} </a>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-6">
                @php
                    $bangladesh_main_data = App\Models\product::where('site_id', 'bangladesh_main_data')
                        ->orderBy('id', 'ASC')
                        ->limit(6)
                        ->get();
                @endphp

                @foreach ($bangladesh_main_data as $item)
                    <div class="new-area-two-center-side">
                        <img src="{{ asset('fontend/images/prothomalo-computer.webp ') }}" alt="">
                        <p>
                            {{ $item->product_name }}
                        </p>
                        <span class="para_two">
                            টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড ইনফিনিক্স।
                            এর মধ্যে নোট ৩০ প্রো, হট ৩০, এবং স্মার্ট ৮, এই তিনটি স্মার্টফোন সবার নজর কেড়েছে
                            বিশেষভাবে।
                        </span>
                    </div>
                @endforeach

            </div>
            <div class="col-md-3">
                <div class="row mb-20">

                    @php
                        $bangladesh_left_side = App\Models\product::where('site_id', 'bangladesh_left_side')
                            ->orderBy('id', 'ASC')
                            ->limit(2)
                            ->get();
                    @endphp

                    @foreach ($bangladesh_left_side as $item)
                        <div class="row mb-20">
                            <div class="col-md-6 p0">
                                <div class="software-left-area">
                                    <a href="">{{ $item->product_name }}</a>
                                </div>
                            </div>
                            <div class="col-md-6 p0">
                                <div class="software_left">
                                    <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    @php
                        $bangladesh_left_single_data = App\Models\product::where('site_id', 'bangladesh_left_single_data')
                            ->orderBy('id', 'ASC')
                            ->limit(6)
                            ->get();
                    @endphp

                    @foreach ($bangladesh_left_single_data as $item)
                        <div class="software_data_left_side">
                            <a href="">{{ $item->product_name }} </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- trending news  -->
    <div class="trend-menu m-20">
        <ul>
            <li>ট্রেন্ডিং নিউস :</li>
            <li><a href="">আন্তর্জাতিক </a></li>
            <li><a href="">টেলিকম ও গ্যাজেটস</a></li>
            <li><a href="">সফটওয়্যার </a></li>
            <li><a href="">টেকটক টিপস </a></li>
            <li><a href="">বিনোদন ও লাইফ স্টাইল</a></li>
            <li><a href="">গেইম</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="add5">
                <div class="add-area-5">
                    <img src=" {{ asset('fontend/images/add-image.jpg ') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- software-area  -->

    <div class="container">
        <div class="row">
            <div class="title-area m-20">
                <div class="title-area m-20">
                    <div class="title-area m-20">
                        <div class="text-align-border  text-center">
                            <h1 class="border-text1">সফটওয়্যার</h1>
                            <h3 class="border-text2">সফটওয়্যার</h3>
                            <div class="line1"></div>
                            <div class="line2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @php
                    $software_left = App\Models\product::where('site_id', 'software_left')
                        ->orderBy('id', 'ASC')
                        ->limit(5)
                        ->get();
                @endphp

                @foreach ($software_left as $item)
                    <div class="row border_bottom2">
                        <div class="col-md-8">
                            <div class="right-side-news">
                                <p>{{ $item->product_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-side-news-img mt-05">
                                <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @php
                    $software_main = App\Models\product::where('site_id', 'software_main')
                        ->orderBy('id', 'ASC')
                        ->limit(1)
                        ->get();
                @endphp

                @foreach ($software_main as $item)
                    <div class="new-area-two-center-side">
                        <img src="{{ url($item->product_img) }}" alt="">
                        <p>{{ $item->product_name }}</p>
                        <span class="para_two">
                            টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড ইনফিনিক্স।
                            এর মধ্যে নোট ৩০ প্রো, হট ৩০, এবং স্মার্ট ৮, এই তিনটি স্মার্টফোন সবার নজর কেড়েছে
                            বিশেষভাবে।
                            এর মধ্যে নোট ৩০ প্রো, হট ৩০, এবং স্মার্ট ৮, এই তিনটি স্মার্টফোন সবার নজর কেড়েছে
                            বিশেষভাবে।
                            এর মধ্যে নোট ৩০ প্রো, হট ৩০, এবং স্মার্ট ৮, এই তিনটি স্মার্টফোন সবার নজর কেড়েছে
                            বিশেষভাবে।
                        </span>
                    </div>
                @endforeach

            </div>
            <div class="col-md-3">
                @php
                    $software_right = App\Models\product::where('site_id', 'software_right')
                        ->orderBy('id', 'ASC')
                        ->limit(5)
                        ->get();
                @endphp

                @foreach ($software_right as $item)
                    <div class="row border_bottom2">
                        <div class="col-md-8">
                            <div class="right-side-news">
                                <p>{{ $item->product_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-side-news-img mt-05">
                                <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- tech-talk-area  area-two-->
    <div class="container m-20">
        <div class="row">
            <div class="title-data">
                <h6>ভিডিও সেকশন</h6>
            </div>
        </div>
    </div>
    <div class="tech-talk">
        <div class="container p-300">
            <div class="row">

                {{-- @php
                    $SelfVideo = App\Models\SelfVideo::orderBy('id', 'ASC')->get();

                @endphp



                @foreach ($SelfVideo as $video)
                    <div>
                        <h2>{{ $video->title }}</h2>
                        <video width="400" controls>
                            <source src="{{ storage_path('storage/app/public/' . $video->file_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                @endforeach --}}



                {{-- <div class="col-md-2">
                    <div class="tech-data-area text-center">
                        <img src="  {{ asset('fontend/images/sportOne.webp  ') }}" alt="" class="img-fluid">
                        <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                    </div>
                </div> --}}


                @php
                    $video = App\Models\video::orderBy('id', 'DESC')->get();

                @endphp
                @foreach ($video as $item)
                    <div class="col-md-3 tech-data-area text-center">


                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $item->code_id }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                        <a href="" class="linl-mt">{{ $item->title }}</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- like-brand-area  -->
    <div class="like-brand-area border_top">
        <div class="container ">
            <div class="row">

                <div class="col-md-9 ">
                    <div class="title-data">
                        <h6>জনপ্রিয় ব্র্যান্ড</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-2 text-center p0  logo-area-data">
                            <div class="logo">
                                <img src=" {{ asset('fontend/images/msilogo.jpg  ') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <h4>MSI</h4>
                        </div>
                        <div class="col-md-2 text-center p0 logo-area-data">
                            <div class="logo">
                                <img src=" {{ asset('fontend/images/hp.jpg ') }}" alt="" class="img-fluid">
                            </div>
                            <h4>HP</h4>
                        </div>
                        <div class="col-md-2 text-center p0 logo-area-data">
                            <div class="logo">
                                <img src=" {{ asset('fontend/images/google.jpg  ') }}" alt="" class="img-fluid">
                            </div>
                            <h4>Google</h4>
                        </div>
                        <div class="col-md-2 text-center p0 logo-area-data">
                            <div class="logo">
                                <img src="{{ asset('fontend/images/asrock.jpg ') }}" alt="" class="img-fluid">
                            </div>
                            <h4>AsRock</h4>
                        </div>
                        <div class="col-md-2 text-center p0 logo-area-data">
                            <div class="logo">
                                <img src="{{ asset('fontend/images/Microsoft.jpg  ') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <h4>Microsoft</h4>
                        </div>
                        <div class="col-md-2 text-center p0 logo-area-data">
                            <div class="logo">
                                <img src="{{ asset('fontend/images/Intel.jpg   ') }}" alt="" class="img-fluid">
                            </div>
                            <h4>Intel</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="title-data">
                            <h6>ব্রান্ডের গল্প</h6>
                        </div>

                        @php
                            $brand_story = App\Models\product::where('site_id', 'brand_story')
                                ->orderBy('id', 'ASC')
                                ->limit(4)
                                ->get();
                        @endphp

                        <div class="row like-brand">
                            @foreach ($brand_story as $item)
                                <div class="col-md-3">
                                    <div class="like-brad-data">
                                        <div class="brad_data_img_area">
                                            <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="brad_data">
                                            <a href="">{{ $item->product_name }} </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="right-side-area_brand_news">
                        @php
                            $brand_right = App\Models\product::where('site_id', 'brand_right')
                                ->orderBy('id', 'ASC')
                                ->limit(6)
                                ->get();
                        @endphp

                        @foreach ($brand_right as $item)
                            <div class="row border_bottom2">
                                <div class="col-md-8">
                                    <div class="right-side-news">
                                        <a href="">{{ $item->product_name }} </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="right-side-news-img mt-05">
                                        <img src=" {{ url($item->product_img) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- tech tips   -->

    <div class="container">
        <div class="row">
            <div class="title-area m-20">
                <div class="title-area m-20">
                    <div class="title-area m-20">
                        <div class="text-align-border  text-center">
                            <h1 class="border-text1">গ্যাজেটস</h1>
                            <h3 class="border-text2">গ্যাজেটস</h3>
                            <div class="line1"></div>
                            <div class="line2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @php
                    $gadgets_left = App\Models\product::where('site_id', 'gadgets_left')
                        ->orderBy('id', 'ASC')
                        ->limit(3)
                        ->get();
                @endphp

                @foreach ($gadgets_left as $item)
                    <div class="tips-data-area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="tips-img">
                                    <img src="{{ url($item->product_img) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8 p0">
                                <div class="tips-data">
                                    <a href="">{{ $item->product_name }} </a>
                                    <p>
                                        টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                        ইনফিনিক্স।
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="col-md-6">
                <div class="row">
                    @php
                        $gadgets_right = App\Models\product::where('site_id', 'gadgets_right')
                            ->orderBy('id', 'ASC')
                            ->limit(6)
                            ->get();
                    @endphp

                    @foreach ($gadgets_right as $item)
                        <div class="col-md-6">
                            <div class="tips-data-two">
                                <div class="row">
                                    <a href="">{{ $item->product_name }} </a>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                                ইনফিনিক্স। </p>
                                        </div>
                                        <div class="col-md-4">
                                            <img src=" {{ url($item->product_img) }}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- computer-area  -->

    <div class="container">
        <div class="row">
            <div class="title-area m-20">
                <div class="title-area m-20">
                    <div class="title-area m-20">
                        <div class="text-align-border  text-center">
                            <h1 class="border-text1">গেইম</h1>
                            <h3 class="border-text2">গেইম</h3>
                            <div class="line1"></div>
                            <div class="line2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @php
                $gadgets_left = App\Models\product::where('site_id', 'game')
                    ->orderBy('id', 'ASC')
                    ->limit(8)
                    ->get();
            @endphp

            @foreach ($gadgets_left as $item)
                <div class="col-md-3 mt-3">
                    <div class="computer-data">
                        <div class="computer-data-img">
                            <img src="{{ asset('fontend/images/sportOne.webp ') }}" alt="" class="img-fluid">
                        </div>
                        <div class="computer-data-area mt-3">
                            <h3>বিজয় দিবস উদযাপনের বাংলাদেশ টেলিযোগাযোগ নিয়ন্ত্রণ কমিশন</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tips-data-two">
                        <div class="row">
                            <a href="">{{ $item->product_name }} </a>
                            <div class="row">
                                <div class="col-md-8">
                                    <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                        ইনফিনিক্স। </p>
                                </div>
                                <div class="col-md-4">
                                    <img src=" {{ url($item->product_img) }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>


    <!-- trending news  -->

    <div class="trend-menu m-20">
        <ul>
            <li>ট্রেন্ডিং নিউস :</li>
            <li><a href="">আন্তর্জাতিক </a></li>
            <li><a href="">টেলিকম ও গ্যাজেটস</a></li>
            <li><a href="">সফটওয়্যার </a></li>
            <li><a href="">টেকটক টিপস </a></li>
            <li><a href="">বিনোদন ও লাইফ স্টাইল</a></li>
            <li><a href="">গেইম</a></li>
        </ul>
    </div>


    <div class="container">
        <div class="row">
            <div class="add5">
                <div class="add-area-5">
                    <img src=" {{ asset('fontend/images/add-image.jpg ') }}" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- windows-area  -->

    <div class="container m-20">
        <div class="row">
            <div class="col-md-3">
                <div class="computer_title">
                    <a href="">ইন্টারনেট </a>
                </div>
                <div class="data-area-computer">
                    <img src=" {{ asset('fontend/images/prothomalo-computer.webp') }} " alt=""
                        class="img-fluid">
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রাহকরা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="computer_title">
                    <a href="">ফিচার</a>
                </div>
                <div class="data-area-computer">
                    <img src="{{ asset('fontend/images/prothomalo-computer.webp') }}" alt="" class="img-fluid">
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="computer_title">
                    <a href="">অনলাইন উদ্যোগ</a>
                </div>
                <div class="data-area-computer">
                    <img src="{{ asset('fontend/images/prothomalo-computer.webp') }}" alt="" class="img-fluid">
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="computer_title">
                    <a href="">টেলিকম ও গ্যাজেটস</a>
                </div>
                <div class="data-area-computer">
                    <img src="{{ asset('fontend/images/prothomalo-computer.webp') }}" alt="" class="img-fluid">
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
                <div class="computer-data-two">
                    <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে গ্রা</a>
                </div>
            </div>
        </div>
    </div>

    <!-- child-care-area   -->

    <!-- trending news  -->
    <div class="trend-menu m-20">
        <ul>
            <li>ট্রেন্ডিং নিউস :</li>
            <li><a href="">আন্তর্জাতিক </a></li>
            <li><a href="">টেলিকম ও গ্যাজেটস</a></li>
            <li><a href="">সফটওয়্যার </a></li>
            <li><a href="">টেকটক টিপস </a></li>
            <li><a href="">বিনোদন ও লাইফ স্টাইল</a></li>
            <li><a href="">গেইম</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <div class="add5">
                <div class="add-area-5">
                    <img src="{{ asset('fontend/images/add-image.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- computer-area  -->

    <!-- software-area two -->

    <div class="container m-20">
        <div class="row">
            <div class="col-md-4">
                <div class="software-data category_thum p-20 pi-20">
                    <img src="{{ asset('fontend/images/wallton.jpeg ') }}" alt="" class="img-fluid ">
                    <div class="software-area-two">
                        <p>ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, ব্যবহার কমাচ্ছে</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="tips-data-two">
                        <div class="row">
                            <div class="col-md-8 software-area-three">
                                <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                    ইনফিনিক্স।</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('fontend/images/wallton.jpeg ') }}" class="img-thumbnail"
                                    alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                    <div class="tips-data-two">

                        <div class="row">
                            <div class="col-md-8 software-area-three">
                                <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                    ইনফিনিক্স। </p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('fontend/images/wallton.jpeg ') }}" class="img-thumbnail"
                                    alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                    <div class="tips-data-two">

                        <div class="row">
                            <div class="col-md-8 software-area-three">
                                <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                    ইনফিনিক্স। </p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('fontend/images/wallton.jpeg ') }}" class="img-thumbnail"
                                    alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="tips-data-two">
                        <div class="row">
                            <div class="col-md-8 software-area-three">
                                <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                    ইনফিনিক্স।</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('fontend/images/wallton.jpeg ') }}" class="img-thumbnail"
                                    alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                    <div class="tips-data-two">

                        <div class="row">
                            <div class="col-md-8 software-area-three">
                                <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                    ইনফিনিক্স। </p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('fontend/images/wallton.jpeg ') }}" class="img-thumbnail"
                                    alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                    <div class="tips-data-two">

                        <div class="row">
                            <div class="col-md-8 software-area-three">
                                <p> টেকটক বিডি প্রতিবেদন : ২০২৩ সালে বেশকিছু নতুন ফোন এনেছিল প্রযুক্তি ব্র্যান্ড
                                    ইনফিনিক্স। </p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('fontend/images/wallton.jpeg ') }}" class="img-thumbnail"
                                    alt="" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>
    </div>
@endsection
