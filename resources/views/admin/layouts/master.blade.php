<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from seask.net/templates/templatemonster/nettaadmoon/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2024 12:30:29 GMT -->

<head>
    <meta charset="utf-8">
    <title>Dashboard | NettaAdMoon - Responsive NettaAdMoon Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="NettaThemes" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="{{asset('admin/assets/js/config.js')}}"></script>
</head>

<body>
    <div class="flex wrapper">
        <!-- Sidenav Menu -->
        @include('admin.layouts.sidebar')
        <!-- Sidenav Menu End  -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- Topbar Start -->
            @include('admin.layouts.header')
            <!-- Topbar End -->

            <!-- Topbar Search Modal -->
            <div>
                <div id="topbar-search-modal" class="fc-modal hidden w-full h-full fixed top-0 start-0 z-50">
                    <div class="fc-modal-open:opacity-100 fc-modal-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-12 sm:mx-auto">
                        <div class="mx-auto max-w-2xl overflow-hidden rounded-xl bg-white shadow-2xl transition-all dark:bg-slate-800">
                            <div class="relative">
                                <div class="pointer-events-none absolute top-3.5 start-4 text-gray-900 text-opacity-40 dark:text-gray-200">
                                    <i class="mgc_search_line text-xl"></i>
                                </div>
                                <input type="search" class="h-12 w-full border-0 bg-transparent ps-11 pe-4 text-gray-900 placeholder-gray-500 dark:placeholder-gray-300 dark:text-gray-200 focus:ring-0 sm:text-sm" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           @yield('content')
            <!-- Footer Start -->
            @include('admin.layouts.footer')
            <!-- Footer End -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    <!-- Back to Top Button -->
    <button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
        <i class="mgc_arrow_up_line text-lg"></i>
    </button>

    <!-- Theme Settings -->
    @include('admin.layouts.theme')

    <!-- Plugin Js -->
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/_frostui/css/frostui.js')}}"></script>

    <!-- App Js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>

    <!-- Apexcharts js -->
    <script src="{{asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Dashboard Project Page js -->
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

</body>


<!-- Mirrored from seask.net/templates/templatemonster/nettaadmoon/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2024 12:31:04 GMT -->

</html>
