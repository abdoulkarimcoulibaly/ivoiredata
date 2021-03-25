<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- jquery-->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui-1.11.4.min.js')}}"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png')}}">
    <!-- Normalize CSS 
        -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="{{ asset('font/flaticon.css')}}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/slider/css/nivo-slider.css')}}">
    <!-- Owl Carousel js -->
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css')}}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <!-- Datatable css -->
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css')}}">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->

        <header class="header">
            <!-- <div id="header-topbar" class="pd-b-25 pd-t-35">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="header-topbar-layout2">
                                <div class="phone-number"><i class="flaticon-call-answer"></i> +225-0747705293</div>
                                <span>Call today for a free estimate.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div id="rt-sticky-placeholder"></div> -->
            <div id="header-menu" class="header-menu menu-layout3 bg-accent">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12 d-flex justify-content-center possition-static">
                            <nav id="dropdown" class="template-main-menu">
                                <ul>
                                    <li>
                                        <a href="{{ route('home')}}">HOME</a>
                                    </li>

                                    <li>
                                        <a href="#">DATA INFOS</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="{{route('demography')}}">Démographie</a>
                                            </li>
                                            <li>
                                                <a href="#">Santé</a>
                                            </li>
                                            <li>
                                                <a href="#">Economie</a>
                                            </li>
                                            <li>
                                                <a href="#">Tourisme</a>
                                            </li>
                                            <li>
                                                <a href="#">Transport</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about1.html">ABOUT</a>
                                    </li>

                                    <li class="hide-on-desktop-menu">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="about1.html">About</a>
                                            </li>
                                            <li>
                                                <a href="service1.html">Services</a>
                                            </li>
                                            <li>
                                                <a href="project1.html">Project</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404 Error</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">CONTACT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Header Area End Here -->

        @yield('content')

        <!-- Footer Area Start Here -->

        <footer class="footer-wrap-layout1">
            <!-- <div class="footer-top-wrap-layout1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-box-layout1">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="img/logo-light.png" alt="logo"></a>
                                </div>
                                <p>We always deliver 100% customer satisfaction and absolute quality
                                    work without any other compromis, just like we've been doing since 1982.</p>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="footer-menu-box">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="about1.html">Infos data</a>
                                        </li>
                                        <li>
                                            <a href="#">About</a>
                                        </li>
                                        <li>
                                            <a href="#">Contatct</a>
                                        </li>
                                    </ul>
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="#">Site Map</a>
                                        </li>
                                        <li>
                                            <a href="#">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="#">Repairs Roofing </a>
                                        </li>
                                        <li>
                                            <a href="blog1.html">Blog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <div class="footer-form-box">
                                    <p>Subscribe For Daily Latest News &amp; Updates</p>
                                    <form class="contact-form-box">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="email" placeholder="E-mail Address" class="form-control" name="name" data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="col-12 form-group">
                                                <button type="submit" class="item-btn">Subscribe Now</button>
                                            </div>
                                        </div>
                                        <div class="form-response"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="footer-bottom-wrap-layout1">
                <div class="copyright">Copyright © 2021 Roofit by <a href="https://www.radiustheme.com/" target="_blank">RadiusTheme.</a> All Rights Reserved.</div>
            </div>
        </footer>

        <!-- Footer Area End Here -->
    </div>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- MeanMenu js -->
    <script src="{{ asset('js/jquery.meanmenu.min.js')}}"></script>
    <!-- Isotop js -->
    <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
    <!-- ImagesLoaded js -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Nivo Slider js -->
    <script src="{{ asset('vendor/slider/js/jquery.nivo.slider.js')}}"></script>
    <script src="{{ asset('vendor/slider/home.js')}}"></script>
    <!-- Owl Carousel js -->
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.min.js')}}"></script>
    <!-- Counter Up js -->
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <!-- Waypoints js -->
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <!-- Magnific Popup js -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Select 2 js -->
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <!-- Validator js -->
    <script src="{{ asset('js/validator.min.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallax.min.js')}}"></script>
    <!-- Main js -->
    <script src="{{ asset('js/main.js')}}"></script>
    <!-- Modernize js -->
    <script src="{{ asset('js/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{ asset('js/datatables.min.js')}}"></script>

    <!-- jquery-ui js -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <!-- Chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

</body>

</html>