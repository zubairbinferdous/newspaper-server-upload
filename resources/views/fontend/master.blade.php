<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    @yield('title_img')
    <meta property="og:description" content=" @yield('title_dis') ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/fontend/css/style.css') }}">


</head>
{{-- {{-- <meta property="og:image" content="{{ url($main_slider->product_img) }}"> --}}
{{-- <meta property="og:image" content="{{ url($main_slider->product_img) }}"> --}}
{{-- <title>Tech Talk</title> --}}


<body>

    <header class="border_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="side-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="namaz-area">
                                    <div class="row ">
                                        <div class="col-md-12 p0 movie_add">
                                            <img src="{{ asset('/fontend/images/topleft_add.png') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="logo-area logo_broder">
                        @php
                            $footerLogo = App\Models\control::orderBy('id', 'DESC')
                                ->limit(1)
                                ->get();
                        @endphp
                        @foreach ($footerLogo as $item)
                            <a href="{{ route('homePage') }}">
                                <img src="{{ asset($item->header_photo) }}" alt="Techtalk BD" class="img-fluid"
                                    style="height: 200px">
                            </a>
                        @endforeach

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="side-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="date_area text-center">
                                    <p id="date_area_bangla">বুধবার ০৩ জানুয়ারি ২০২৪, - ১৮ পৌষ ১৪৩০</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="side-area-data border-top text-center">
                                    <ul class="header-link">
                                        <li><a href="https://www.facebook.com/techtalk.bd.56" target="_blank"><i
                                                    class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- menu-area  -->

    @php
        $catagory = App\Models\catagory::orderBy('id', 'ASC')
            ->limit(11)
            ->get();
    @endphp
    <menu>
        <div class="container">
            <div class="row ">
                <div class="col-md-1 p0">
                    <div class="category">
                        <a href="{{ route('homePage') }}">হোম</a>

                    </div>
                </div>
                @foreach ($catagory as $item)
                    <div class="col-md-1 p0">
                        <div class="category">
                            <a href="{{ url('post/categoryPage/' . $item->id) }}">{{ $item->cate_name }}</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <form class="d-flex" role="search" action="{{ route('search') }}" method="GET">
                @csrf
                <input class="form-control me-1" type="search" placeholder="সার্চ" name="search" aria-label="Search"
                    value="{{ isset($search) ? $search : '' }}" required>
                <button class="btn btn-outline-success" type="submit">সার্চ</button>
            </form>
        </div>
    </menu>
    <!-- running-news  -->
    @yield('master')
    <!-- footer-area  -->

    <footer class="m-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row footer_logo">
                        @php
                            $footerLogo = App\Models\footer::orderBy('id', 'DESC')
                                ->limit(1)
                                ->get();
                        @endphp
                        @foreach ($footerLogo as $item)
                            <img src=" {{ asset($item->footer_photo) }}" alt="" height="200px">
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="footer-logo-area">
                            <div class="footer-logo-area text-center">
                                <ul>
                                    <li>অনুসরণ করুন :</li>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                                <p>ইমেইল : techtalk@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="row">
                        <div class="footer-logo-area">
                            <div class="footer-logo-area text-center">
                                <ul>
                                    <li>অনুসরণ করুন :</li>
                                    <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-menu-area">
                                <ul>
                                    <li><a href="">দেশগ্রাম</a></li>
                                    <li><a href="">ব্রেকিং নিউস</a></li>
                                    <li><a href="">সম্প্রচার</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-menu-area">
                                <ul>
                                    <li><a href="">তারূণ্য</a></li>
                                    <li><a href="">খেলা</a></li>
                                    <li><a href="">যোগাযোগ করুন</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md-6">
                    <div class="footer-email-area">
                        <div class="footer-email">
                            <h1>ইমেইল এলার্ট </h1>
                            <p>নতুন সব খবর জানতে আপনার ইমেইল প্রদান করুন</p>

                            <div class="email-data">
                                <form action="">
                                    <input type="text" placeholder="আপনার ইমেইল"> <br>
                                    <button type="submit" class="email-btn">নিবন্ধন করুন</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="row">-->
            <!--    <div class="footer-logo-area2 text-center">-->
            <!--        <ul>-->
            <!--            <li><a href="">টেকটক</a></li>-->
            <!--            <li><a href="">সার্কুলেশন</a></li>-->
            <!--            <li><a href="">মন্তব্য নীতিমালা</a></li>-->
            <!--            <li><a href="">বাংলাদেশ</a></li>-->
            <!--            <li><a href="">আন্তর্জাতিক</a></li>-->
            <!--            <li><a href="">টেলিকম ও গ্যাজেটস</a></li>-->
            <!--            <li><a href="">বিনোদন ও লাইফ স্টাইল</a></li>-->
            <!--            <li><a href="">ব্যান্ডের গল্প</a></li>-->
            <!--            <li><a href="">সফটওয়্যার</a></li>-->
            <!--            <li><a href="">কম্পিউটার</a></li>-->
            <!--            <li><a href="">ভিডিও</a></li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->
        </div>

    </footer>
    <div class="footer-end text-center">
        <!--<h4>সম্পাদক : আনোয়ার হোসেন আনু </h4>-->
        <h5>২০২৪-টেকটক বাংলা, সমস্ত অধিকার সংরক্ষিত </h5>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        const newsItems = [
            "New news item 1",
            "New news item 2",
            "New news item 3",
            // Add more news items as needed
        ];

        const tickerList = document.getElementById('ticker-list');

        function initializeTicker() {
            newsItems.forEach((item, index) => {
                const li = document.createElement('li');
                li.textContent = item;
                li.style.animationDelay = `${index * 5}s`; // Adjust the delay between news items
                tickerList.appendChild(li);
            });
        }

        initializeTicker();

        ticker.addEventListener('mouseleave', () => {
            tickerList.style.animationPlayState = 'running';
        });

        ticker.addEventListener('mouseenter', () => {
            tickerList.style.animationPlayState = 'paused';
        });
    </script>
    <script>
        function convertToBanglaDigits(input) {
            const digitsMap = {
                '0': '০',
                '1': '১',
                '2': '২',
                '3': '৩',
                '4': '৪',
                '5': '৫',
                '6': '৬',
                '7': '৭',
                '8': '৮',
                '9': '৯'
            };

            return input.replace(/[0-9]/g, (match) => digitsMap[match]);
        }

        function getBanglaMonthName(monthIndex) {
            const monthsInBangla = [
                'জানুয়ারি',
                'ফেব্রুয়ারি',
                'মার্চ',
                'এপ্রিল',
                'মে',
                'জুন',
                'জুলাই',
                'আগস্ট',
                'সেপ্টেম্বর',
                'অক্টোবর',
                'নভেম্বর',
                'ডিসেম্বর'
            ];

            return monthsInBangla[monthIndex];
        }

        function getBanglaDayName(dayIndex) {
            const daysInBangla = [
                'শনিবার',
                'রবিবার',
                'সোমবার',
                'মঙ্গলবার',
                'বুধবার',
                'বৃহস্পতিবার',
                'শুক্রবার'
            ];

            return daysInBangla[dayIndex];
        }

        function getCurrentDateTimeInBangla() {
            const now = new Date();
            const year = convertToBanglaDigits(now.getFullYear().toString());
            const month = getBanglaMonthName(now.getMonth());
            const day = convertToBanglaDigits(now.getDate().toString().padStart(2, '0'));
            const hours = convertToBanglaDigits(now.getHours().toString().padStart(2, '0'));
            const minutes = convertToBanglaDigits(now.getMinutes().toString().padStart(2, '0'));
            const seconds = convertToBanglaDigits(now.getSeconds().toString().padStart(2, '0'));
            const banglaDay = getBanglaDayName(now.getDay());
            const banglaDateTime = `${banglaDay} ${day} ${month} ${year} সাল`;
            const data_add = document.getElementById("date_area_bangla").innerText = banglaDateTime;
        }
        getCurrentDateTimeInBangla()
    </script>
    {{-- <script>
        function convertToBanglaDigits(input) {
            const digitsMap = {
                '0': '০',
                '1': '১',
                '2': '২',
                '3': '৩',
                '4': '৪',
                '5': '৫',
                '6': '৬',
                '7': '৭',
                '8': '৮',
                '9': '৯'
            };

            return input.replace(/[0-9]/g, (match) => digitsMap[match]);
        }

        function getBanglaMonthName(monthIndex) {
            const monthsInBangla = [
                'জানুয়ারি',
                'ফেব্রুয়ারি',
                'মার্চ',
                'এপ্রিল',
                'মে',
                'জুন',
                'জুলাই',
                'আগস্ট',
                'সেপ্টেম্বর',
                'অক্টোবর',
                'নভেম্বর',
                'ডিসেম্বর'
            ];

            return monthsInBangla[monthIndex];
        }

        function getBanglaDayName(dayIndex) {
            const daysInBangla = [
                'শনিবার',
                'রবিবার',
                'সোমবার',
                'মঙ্গলবার',
                'বুধবার',
                'বৃহস্পতিবার',
                'শুক্রবার'
            ];

            return daysInBangla[dayIndex];
        }

        function getCurrentDateTimeInBangla() {
            const options = {
                timeZone: 'Asia/Dhaka',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
            };

            const now = new Date();
            const banglaDateTime = now.toLocaleString('en-US', options).replace(/[0-9]/g, (match) => convertToBanglaDigits(
                match));
            const data_add = document.getElementById("date_area_bangla").innerText = banglaDateTime;
        }

        // Call the function to get and display the current date and time in Bangla
        getCurrentDateTimeInBangla();
    </script> --}}
    <script>
        $('#summernote').summernote({
            placeholder: '',
            tabsize: 2,
            height: 100
        });
    </script>
</body>

</html>

{{-- 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>

</head>

<body>
    <div id="summernote"></div>

</body>

</html> --}}
