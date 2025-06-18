<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
        <meta charset="UTF-8">
        <title>Jobstack - Job Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Job Listing Landing Template" name="description">
        <meta content="Job, CV, Career, Resume, Job Portal, Create Job, Post job, tailwind Css" name="keywords">
        <meta name="author" content="Nusrat Jahan Heer">
        <meta name="email" content="nusratrita@gmail.om">
        <meta name="version" content="1.6.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('web-assets/images/favicon.ico') }}">

        <!-- Css -->
        <link href="{{ asset('web-assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
        <link href="{{ asset('web-assets/libs/choices.js/public/assets/styles/choices.min.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('web-assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('web-assets/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('web-assets/css/tailwind.min.css') }}" rel="stylesheet" type="text/css">

    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader End -->
        
        @include('website.header')

        @yield('content')

        @include('website.footer')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-emerald-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('web-assets/libs/tobii/js/tobii.min.js') }}"></script>
        <script src="{{ asset('web-assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
        <script src="{{ asset('web-assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('web-assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('web-assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->
        @yield('scripts')
        @stack('scripts')
    </body>
</html>