<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gentlemen's Barber Shop - HTML CSS Template</title>

    <!-- CSS FILES -->

    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/templatemo-barber-shop.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/images/templatemo-barber-logo.png') }}" type="image/x-icon" />

    <!--

TemplateMo 585 Barber Shop

https://templatemo.com/tm-585-barber-shop

-->
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                <div
                    class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                    <a class="navbar-brand" href="index.html">
                        <img <img src="{{ asset('assets/images/templatemo-barber-logo.png') }}"
                            class="logo-image img-fluid" align="">
                    </a>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Our Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Price List</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-8 ms-sm-auto col-lg-9 p-0">

                {{-- Here --}}
                @yield('content')

                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <h4 class="site-footer-title mb-4">Our Branches</h4>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Aurangaßad</strong>

                                    <p>Aurangaßad Str. 31, 824101 Bihar, India</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <div class="site-footer-thumb">
                                    <strong class="mb-1">Phesar</strong>

                                    <p>Phesar 27, 824121 Aurangabad, Bihar</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-11">
                                <strong class="mb-1">Gaya</strong>

                                <p>Gaya 23, 823001 Bihar, India</p>
                            </div>
                        </div>
                    </div>

                    <div class="site-footer-bottom">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-8 col-12 mt-4">
                                    <p class="copyright-text mb-0">Copyright © 2036 Barber Shop
                                        - Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">Singh
                                            Shubham</a></p>
                                </div>

                                <div class="col-lg-2 col-md-3 col-3 mt-lg-4 ms-auto">
                                    <a href="#section_1" class="back-top-icon smoothscroll" title="Back Top">
                                        <i class="bi-arrow-up-circle"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT FILES -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/click-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')

</body>

</html>
