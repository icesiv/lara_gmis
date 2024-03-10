<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <meta name="description" content="GreenMind International School, where we nurture young minds from Play Group to A Level within the esteemed Cambridge Curriculum. Founded in 2022, our vision revolves around fostering 'Success with values'. Committed to holistic growth, we strive to cultivate well-rounded individuals who are not only academically proficient but also morally upright and socially conscious. Our aim is to empower our students to become informed, aware, and ethically strong citizens, poised to lead and propel our nation towards a brighter future.">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-5.0.5-alpha.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    @yield('custom-head')

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= header start ========================= -->
    <header id="home" class="header">

        <div class="header-wrapper">
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="header-top-left text-center text-md-left">
                                <ul>
                                    <li><a href="tel:01996304301"><i class="lni lni-phone"></i> 01996304301</a></li>
                                    <li><a href="tel:01996304304"><i class="lni lni-phone"></i> 01996304304</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="header-top-right d-none d-md-block">
                                <ul>
                                    <li><a href="https://www.facebook.com/gmintschool" target="_blank"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="https://www.youtube.com/@GreenmindInternationalSc-wv8xz" target="_blank"><i class="lni lni-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- navbar -->
            @include('partials._navbar')

        </div>


    </header>

    <!-- ========================= header end ========================= -->

    <!-- Content -->
    @yield('content')
    
    <!-- Footer -->
    @include('partials._footer')

    <script src="{{ asset('assets/js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    @yield('custom-script')

</body>

</html>