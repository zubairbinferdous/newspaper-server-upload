<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="./assets/" data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> TECH TALK ADMIN</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <!-- Toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Toaster   -->

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/fonts/flag-icons.css') }}" />



    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('adminbackend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('adminbackend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('adminbackend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('adminbackend/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <link rel="stylesheet" href="{{ asset('/adminbackend/assets/vendor/libs/quill/editor.css') }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/css/pages/cards-advance.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('adminbackend/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('./adminbackend/assets/js/config.js') }}"></script>
    <script src="{{ asset('') }}"></script>
    <!-- include libraries(jQuery, bootstrap) -->
    <!-- include summernote css/js-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminbackend/assets/css/demo.css') }}" />

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            {{-- <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                xmlns="{{ route('admin.dashboard') }}">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                    fill="#7367F0" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                    fill="#161616" />
                                <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                    fill="#161616" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                    fill="#7367F0" />
                            </svg> --}}
                            <img src="{{ asset('./fontend/image/banner/admin-logo.jpeg') }}" alt=""
                                width="70px" height="70px">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold"><a
                                href="{{ route('admin.dashboard') }}">TECH TALK </a></span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item active">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link">
                            <div data-i18n="Dashboard">Dashboard</div>
                        </a>
                    </li>
                    <!-- Dashboards -->
                    {{-- <li class="menu-item active open">
                        <a href="" class="menu-link menu-toggle">
                            <!-- <i class="menu-icon tf-icons ti ti-smart-home"></i> -->
                            <div data-i18n="Dashboard">Dashboard
                            </div>
                            <!-- <div class="badge bg-label-primary rounded-pill ms-auto">3</div> -->
                        </a>

                    </li> --}}

                    <!-- Layouts -->

                    @if (Auth::user()->username === 'admin')
                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n="Category Area">Category Area</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('addCategory') }}" class="menu-link">
                                        <div data-i18n="Add Category">Add Category</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('allCategory') }}" class="menu-link">
                                        <div data-i18n="All Category">All Category</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n="Sub Category Area">Sub Category Area</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('addSubCategory') }}" class="menu-link">
                                        <div data-i18n="Add Sub Category">Add Sub Category</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('allSubCategory') }}" class="menu-link">
                                        <div data-i18n="All Sub Category">All Sub Category</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n="Brand Area">Brand Area</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('add_brand') }}" class="menu-link">
                                        <div data-i18n="Add Brand">Add Brand</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('all_brand') }}" class="menu-link">
                                        <div data-i18n="All Brand">All Brand</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n=" Post Area">Post Area</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('addProduct') }}" class="menu-link">
                                        <div data-i18n="Add Post">Add Post</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('allProduct') }}" class="menu-link">
                                        <div data-i18n="All Post">All Post</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n="Role Control">Role Control</div>
                            </a>
                            <ul class="menu-sub">

                                <li class="menu-item">
                                    <a href="{{ route('addUser') }}" class="menu-link">
                                        <div data-i18n="Add user">Add user</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('allUser') }}" class="menu-link">
                                        <div data-i18n="All user">All user</div>
                                    </a>
                                </li>
                                {{-- <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="Add user Role">Add user Role</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="" class="menu-link">
                                        <div data-i18n="All user Role">All user Role</div>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n="Site Control">Site Control</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('manager') }}" class="menu-link">
                                        <div data-i18n="Add Control">Add Control</div>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n="video area">video area</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('add_video') }}" class="menu-link">
                                        <div data-i18n="add youtube video">Add youtube video</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('all_video') }}" class="menu-link">
                                        <div data-i18n="all youtube video">All youtube video</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{ route('show.upload.form') }}" class="menu-link">
                                        <div data-i18n="add video">Add video</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{ route('allSelfVideo') }}" class="menu-link">
                                        <div data-i18n="all video">All video</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="menu-item">
                            <a href="" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                                <div data-i18n=" Post Area">Post Area</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('addProduct') }}" class="menu-link">
                                        <div data-i18n="Add Post">Add Post</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('allProduct') }}" class="menu-link">
                                        <div data-i18n="All Post">All Post</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif





                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            {{-- <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0"
                                    href="javascript:void(0);">
                                    <i class="ti ti-search ti-md me-2"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div> --}}
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Language -->
                            {{-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                            <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
                                            <span class="align-middle">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                            <i class="fi fi-fr fis rounded-circle me-1 fs-3"></i>
                                            <span class="align-middle">French</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                            <i class="fi fi-de fis rounded-circle me-1 fs-3"></i>
                                            <span class="align-middle">German</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                            <i class="fi fi-pt fis rounded-circle me-1 fs-3"></i>
                                            <span class="align-middle">Portuguese</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <!--/ Language -->

                            <!-- Style Switcher -->
                            <li class="nav-item me-2 me-xl-0">
                                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                    <i class="ti ti-md"></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- Quick links  -->
                            {{-- <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="ti ti-layout-grid-add ti-md"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0">
                                    <div class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                            <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Add shortcuts"><i class="ti ti-sm ti-apps"></i></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-shortcuts-list scrollable-container">
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-calendar fs-4"></i>
                                                </span>
                                                <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                                <small class="text-muted mb-0">Appointments</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-file-invoice fs-4"></i>
                                                </span>
                                                <a href="app-invoice-list.html" class="stretched-link">Invoice
                                                    App</a>
                                                <small class="text-muted mb-0">Manage Accounts</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-users fs-4"></i>
                                                </span>
                                                <a href="app-user-list.html" class="stretched-link">User App</a>
                                                <small class="text-muted mb-0">Manage Users</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-lock fs-4"></i>
                                                </span>
                                                <a href="app-access-roles.html" class="stretched-link">Role
                                                    Management</a>
                                                <small class="text-muted mb-0">Permission</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-chart-bar fs-4"></i>
                                                </span>
                                                <a href="index.html" class="stretched-link">Dashboard</a>
                                                <small class="text-muted mb-0">User Profile</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-settings fs-4"></i>
                                                </span>
                                                <a href="pages-account-settings-account.html"
                                                    class="stretched-link">Setting</a>
                                                <small class="text-muted mb-0">Account Settings</small>
                                            </div>
                                        </div>
                                        <div class="row row-bordered overflow-visible g-0">
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-help fs-4"></i>
                                                </span>
                                                <a href="pages-help-center-landing.html" class="stretched-link">Help
                                                    Center</a>
                                                <small class="text-muted mb-0">FAQs & Articles</small>
                                            </div>
                                            <div class="dropdown-shortcuts-item col">
                                                <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                    <i class="ti ti-square fs-4"></i>
                                                </span>
                                                <a href="modal-examples.html" class="stretched-link">Modals</a>
                                                <small class="text-muted mb-0">Useful Popups</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <!-- Quick links -->

                            <!-- Notification -->

                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('public/adminbackend/assets/img/avatars/1.png') }}" alt
                                            class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('userData') }}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('public/adminbackend/assets/img/avatars/1.png') }}"
                                                            alt class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ Auth::user()->email }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('user.password') }}">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">password</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}" target="">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                @yield('admin')
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                            <div>
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by <a href="https://techtalkbd.com/" target="_blank"
                                    class="fw-semibold">Tech Talk</a>
                            </div>
                            <div>
                                {{-- <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                    class="footer-link me-4">More
                                    Themes</a>

                                <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/"
                                    target="_blank" class="footer-link me-4">Documentation</a>

                                <a href="https://pixinvent.ticksy.com/" target="_blank"
                                    class="footer-link d-none d-sm-inline-block">Support</a> --}}
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('adminbackend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('adminbackend/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('adminbackend/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('adminbackend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('adminbackend/assets/vendor/libs/swiper/swiper.js') }}"></script>
    {{-- <script src="{{ asset('adminbackend/assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script> --}}
    <script src="{{ asset('adminbackend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    {{-- <script src="{{ asset('adminbackend/assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script> --}}
    <script src="{{ asset('adminbackend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}">
    </script>
    {{-- <script src="{{ asset('adminbackend/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"> --}}
    </script>

    <!-- Main JS -->
    <script src="{{ asset('adminbackend/assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('adminbackend/assets/js/dashboards-analytics.js') }}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src=" {{ asset('adminbackend/assets/js/forms-editors.js') }}"></script>
    {!! Toastr::message() !!}



</body>

</html>
