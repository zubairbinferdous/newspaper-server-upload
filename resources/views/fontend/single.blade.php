@extends('fontend.master')
@section('master')
    <div class="single-news-area">
        <div class="container">
            <div class="row ">
                <div class="col-md-9 ">

                    <!-- single-area-post  -->
                    <div class="row">
                        <div class="category-area-blog">
                            <h6>{{ $product->catagory->cate_name }}</h6>
                        </div>

                        <div class="row">
                            <div class="blog-img">
                                <img src="{{ asset($product->product_img) }}" alt="" class="img-fluid"
                                    style="height:500px">
                            </div>
                        </div>

                        <div class="blog-data-area">


                            <h1> {{ $product->product_name }} </h1>

                            <p>{!! $product->product_message !!}</p>
                        </div>

                        <div class="row">
                            <div class="blog-img">
                                @if ($product->product_img2)
                                    <img src="{{ asset($product->product_img2) }}" alt="" class="img-fluid"
                                        style="height:500px">
                                @endif
                            </div>
                        </div>

                        <!-- category-area  -->
                        <div class="category-area-blog">
                            <a href="">মোবাইল ফোন</a>
                            <a href="">এন্ড্রোইড</a>
                            <a href="">ফোন</a>
                        </div>

                        <div class="blog-border-bottom"></div>
                        <!-- shera-area  -->
                        <div class="row">
                            <div class="blog-shear-area">
                                <ul>
                                    <li>শেয়ার করুন : </li>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- comment-area  -->

                        {{-- <div class="row">
                            <div class="comment-area">
                                <div id="comment-section">
                                    <div class="comment">
                                        <p><strong>John Doe</strong> - 2022-01-01 12:34 PM</p>
                                        <p>This is the first comment. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </div>

                                    <div class="comment">
                                        <p><strong>Jane Smith</strong> - 2022-01-02 02:45 PM</p>
                                        <p>Another comment goes here. Sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                            magna aliqua.</p>
                                    </div>

                                    <!-- Add more comments dynamically -->

                                    <form action="#" method="post">
                                        <textarea name="comment" placeholder="Enter your comment"></textarea>
                                        <button type="submit">Post Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                        <!-- post-category-data  -->
                        {{-- <div class="category-area-blog">
                            <a href="">মোবাইল ফোন</a>
                        </div>

                        <div class="row">
                            <div class="blog-img">
                                <img src="./images/prothomalo-computer.webp" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="blog-data-area">

                            <h1> ৫০ মেগাপিক্সেলের ক্যামেরা রয়েছে এই ফোনে </h1>

                            <p>
                                বাংলাদেশের বাজারে নতুন ফোন এনেছে স্যামসাং। ৬.৭ ইঞ্চি হাই-ডেফিনেশন প্লাস (এইচডি‍+) পর্দার
                                ‘গ্যালাক্সি এ০৫’ মডেলের ফোনটির পেছনে ৫০ ও ২ মেগাপিক্সেলের দুটি ক্যামেরা রয়েছে। সেলফি
                                তোলার জন্য রয়েছে ৮ মেগাপিক্সেলের ক্যামেরা। এর ফলে কম আলোতেও ভালো মানের ছবি তোলা যায়। আজ
                                এক সংবাদ বিজ্ঞপ্তিতে এ তথ্য জানিয়েছে স্যামসাং বাংলাদেশ।
                                <br>
                                <br>
                                বাংলাদেশের বাজারে নতুন ফোন এনেছে স্যামসাং। ৬.৭ ইঞ্চি হাই-ডেফিনেশন প্লাস (এইচডি‍+) পর্দার
                                ‘গ্যালাক্সি এ০৫’ মডেলের ফোনটির পেছনে ৫০ ও ২ মেগাপিক্সেলের দুটি ক্যামেরা রয়েছে। সেলফি
                                তোলার জন্য রয়েছে ৮ মেগাপিক্সেলের ক্যামেরা। এর ফলে কম আলোতেও ভালো মানের ছবি তোলা যায়। আজ
                                এক সংবাদ বিজ্ঞপ্তিতে এ তথ্য জানিয়েছে স্যামসাং বাংলাদেশ।
                                <br>
                                <br>

                                বাংলাদেশের বাজারে নতুন ফোন এনেছে স্যামসাং। ৬.৭ ইঞ্চি হাই-ডেফিনেশন প্লাস (এইচডি‍+) পর্দার
                                ‘গ্যালাক্সি এ০৫’ মডেলের ফোনটির পেছনে ৫০ ও ২ মেগাপিক্সেলের দুটি ক্যামেরা রয়েছে। সেলফি
                                তোলার জন্য রয়েছে ৮ মেগাপিক্সেলের ক্যামেরা। এর ফলে কম আলোতেও ভালো মানের ছবি তোলা যায়। আজ
                                এক সংবাদ বিজ্ঞপ্তিতে এ তথ্য জানিয়েছে স্যামসাং বাংলাদেশ।
                                বাংলাদেশের বাজারে নতুন ফোন এনেছে স্যামসাং। ৬.৭ ইঞ্চি হাই-ডেফিনেশন প্লাস (এইচডি‍+) পর্দার
                                ‘গ্যালাক্সি এ০৫’ মডেলের ফোনটির পেছনে ৫০ ও ২ মেগাপিক্সেলের দুটি ক্যামেরা রয়েছে। সেলফি
                                তোলার জন্য রয়েছে ৮ মেগাপিক্সেলের ক্যামেরা। এর ফলে কম আলোতেও ভালো মানের ছবি তোলা যায়। আজ
                                এক সংবাদ বিজ্ঞপ্তিতে এ তথ্য জানিয়েছে স্যামসাং বাংলাদেশ।
                                <br>
                                <br>
                                বাংলাদেশের বাজারে নতুন ফোন এনেছে স্যামসাং। ৬.৭ ইঞ্চি হাই-ডেফিনেশন প্লাস (এইচডি‍+) পর্দার
                                ‘গ্যালাক্সি এ০৫’ মডেলের ফোনটির পেছনে ৫০ ও ২ মেগাপিক্সেলের দুটি ক্যামেরা রয়েছে। সেলফি
                                তোলার জন্য রয়েছে ৮ মেগাপিক্সেলের ক্যামেরা। এর ফলে কম আলোতেও ভালো মানের ছবি তোলা যায়। আজ
                                এক সংবাদ বিজ্ঞপ্তিতে এ তথ্য জানিয়েছে স্যামসাং বাংলাদেশ।

                                <br>
                                <br>
                            </p>
                        </div>

                        <div class="row">
                            <div class="blog-img">
                                <img src="./images/prothomalo-computer.webp" alt="" class="img-fluid">
                            </div>
                        </div> --}}

                        <!-- category-area  -->
                        {{-- <div class="category-area-blog">
                            <a href="">মোবাইল ফোন</a>
                            <a href="">এন্ড্রোইড</a>
                            <a href="">ফোন</a>
                        </div>

                        <div class="blog-border-bottom"></div> --}}
                        <!-- shera-area  -->
                        {{-- <div class="row">
                            <div class="blog-shear-area">
                                <ul>
                                    <li>শেয়ার করুন : </li>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}

                        <!-- comment-area  -->

                        {{-- <div class="row">
                            <div class="comment-area">
                                <div id="comment-section">
                                    <div class="comment">
                                        <p><strong>John Doe</strong> - 2022-01-01 12:34 PM</p>
                                        <p>This is the first comment. Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit.</p>
                                    </div>

                                    <div class="comment">
                                        <p><strong>Jane Smith</strong> - 2022-01-02 02:45 PM</p>
                                        <p>Another comment goes here. Sed do eiusmod tempor incididunt ut labore et
                                            dolore
                                            magna aliqua.</p>
                                    </div>

                                    <!-- Add more comments dynamically -->

                                    <form action="#" method="post">
                                        <textarea name="comment" placeholder="Enter your comment"></textarea>
                                        <button type="submit">Post Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="computer_title text-center mt-30">
                            <a href="">অতি সম্প্রতি </a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা,</a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা,</a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, </a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, </a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, </a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা,</a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা,</a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, </a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, </a>
                        </div>
                        <div class="computer-data-two">
                            <a href="">ইন্টারনেটের দাম বেশি রাখছে মোবাইল অপারেটররা, </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row m-20">
                <div class="title-data">
                    <h6>রিলেটেড নিউজ</h6>
                </div>
            </div>
        </div>
        <div class="tech-talk">
            <div class="container b_botom">
                <div class="row">
                    <div class="col-md-2">
                        <div class="tech-data-area text-center">
                            <img src="./images/sportOne.webp" alt="" class="img-fluid">
                            <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="tech-data-area text-center">
                            <img src="./images/sportOne.webp" alt="" class="img-fluid">
                            <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="tech-data-area text-center">
                            <img src="./images/sportOne.webp" alt="" class="img-fluid">
                            <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="tech-data-area text-center">
                            <img src="./images/sportOne.webp" alt="" class="img-fluid">
                            <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="tech-data-area text-center">
                            <img src="./images/sportOne.webp" alt="" class="img-fluid">
                            <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="tech-data-area text-center">
                            <img src="./images/sportOne.webp" alt="" class="img-fluid">
                            <a href="" class="linl-mt">মহান বিজয় দিবস উপলক্ষে বিটিআরসিতে আলোচনা সভা</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
