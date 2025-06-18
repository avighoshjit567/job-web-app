<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin-assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}" type="image/x-icon">
    <title>Zono - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin="">
    <link
        href="../../../fonts.googleapis.com/css2e3ea.css?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="../../../fonts.googleapis.com/css8807.css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/owlcarousel.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin-assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/responsive.css') }}">
</head>

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        @include('admin.header')

        <!-- Page body Start -->
        <div class="page-body-wrapper">

            @include('admin.sidebar')

            @yield('content')
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 p-0 footer-copyright">
                            <p class="mb-0">Copyright {{ date('Y') }} © Job Web App By Nusrat.</p>
                        </div>
                        <div class="col-md-6 p-0">
                            <p class="heart mb-0">Hand crafted &amp; made with
                                <svg class="footer-icon">
                                    <use href="{{ asset('admin-assets/svg/icon-sprite.svg') }}#heart"></use>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin-assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin-assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin-assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin-assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin-assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('admin-assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin-assets/js/sidebar-pin.js') }}"></script>
    <script src="{{ asset('admin-assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('admin-assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin-assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('admin-assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('admin-assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('admin-assets/js/owlcarousel/owl-custom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('admin-assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('admin-assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('admin-assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('admin-assets/js/height-equal.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('admin-assets/js/script.js') }}"></script>
    <!-- Plugin used-->

    @yield('scripts')
    @stack('scripts')
</body>

</html>
