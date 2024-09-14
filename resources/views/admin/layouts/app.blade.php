<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>


    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="{{ csrf_token() }}" name="sabani tech admin dashboard" />
    <meta content="{{ csrf_token() }}" name="sabani tech" />
    <meta http-equiv="X-UA-Compatible" content="{{ csrf_token() }}" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/Sabani-Tech.jpg') }}">



    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>
@if (Route::has('login'))
    @auth

        <body id="body">
            <!-- menu -->
            @include('admin.layouts.menu')
            <!-- Top Bar Start -->
            @include('admin.layouts.header')
            <!-- Top Bar End -->

            <div class="page-wrapper">

                <!-- Page Content-->
                <div class="page-content-tab">
                    @yield('content')

                    <!--Start Footer-->
                    <!-- Footer Start -->
                    @include('admin.layouts.footer')
                    <!-- end Footer -->
                    <!--end footer-->
                </div>
                <!-- end page content -->
            </div>
            <!-- end page-wrapper -->
        </body>
    @else

        <body id="body" class="auth-page"
            style="
      background-image: url('{{ asset('assets/images/p-1.png') }}');
      background-size: cover;
      background-position: center center;
    ">
            @yield('content-auth')
        </body>
    @endauth


    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/analytics-index.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!--end body-->
@endif

</html>
