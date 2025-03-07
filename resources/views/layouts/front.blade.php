<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&amp;display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/dlicon.css') }}">
    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/odometer-theme-default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/ddbeforeandafter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header class="header-area header-transparent-bar sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-4">
                    <div class="logo">
                        <a href="/">
                            <img class="white-logo" src="{{ asset('images/logo.png') }}" alt="logo">
                            <img class="black-logo" src="{{ asset('images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 d-none d-lg-block d-flex justify-content-center">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a class="{{request()->routeIs('home') ? 'active' : null}}" href="/">HOME</a></li>
                                <li><a class="{{request()->routeIs('about_us') ? 'active' : null}}" href="/about-us">About Us</a></li>
                                <li><a class="{{request()->routeIs('our_ventures') ? 'active' : null}}" href="/our-ventures">Our Ventures</a>
                                    <ul class="sub-menu-style">
                                        <li><a class="{{request()->get('tab', 'neotech') == 'neotech' ? 'active' : ''}}" href="/our-ventures?tab=neotech">NEOTECH Multicity Engineering Consultancy</a></li>
                                        <li><a class="{{request()->get('tab') == 'neha' ? 'active' : ''}}" href="/our-ventures?tab=neha">NEHA Construction</a></li>
                                        <li><a class="{{request()->get('tab') == 'trade' ? 'active' : ''}}" href="/our-ventures?tab=trade">Trade</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{request()->routeIs(['threed_elevation', 'interior_design', 'live_site_photos', 'trade']) ? 'active' : null}}" href="#">Gallery</a>
                                    <ul class="sub-menu-style">
                                        <li><a class="{{request()->routeIs('threed_elevation') ? 'active' : null}}" href="/gallery/3d-elevation">3D ELEVATION</a></li>
                                        <li><a class="{{request()->routeIs('interior_design') ? 'active' : null}}" href="/gallery/interior-design">INTERIOR DESIGN</a></li>
                                        <li><a class="{{request()->routeIs('live_site_photos') ? 'active' : null}}" href="/gallery/live-site-photos">LIVE SITE PHOTOS</a></li>
                                        <li><a class="{{request()->routeIs('trade') ? 'active' : null}}" href="/gallery/trade">Trade</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{request()->routeIs('success_story') ? 'active' : null}}" href="/success-story">Success Story</a></li>
                                <li><a class="{{request()->routeIs('contact_us') ? 'active' : null}}" href="/contact-us">CONTACT US</a></li>
                                <li><a class="{{request()->routeIs('career') ? 'active' : null}}" href="/career">Career</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-8 d-lg-none">
                    <div class="header-action-wrap">
                        <div class="header-action-style">
                            <a class="header-aside-button" href="#"><i class="dlicon ui-3_menu-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- aside start -->
    <div class="header-aside-active">
        <div class="header-aside-wrap">
            <a class="aside-close"><i class="dlicon ui-1_simple-remove"></i></a>
            <div class="header-aside-content">
                <div class="mobile-menu-area">
                    <div class="mobile-menu-wrap">
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a class="{{request()->routeIs('home') ? 'active' : null}}" href="/">HOME</a></li>
                                    <li class="menu-item-has-children"><a class="{{request()->routeIs('about_us') ? 'active' : null}}" href="/about-us">About Us</a></li>
                                    <li class="menu-item-has-children"><a class="{{request()->routeIs('our_ventures') ? 'active' : null}}" href="/our-ventures">Our Ventures</a>
                                        <ul class="dropdown">
                                            <li><a class="{{request()->get('tab', 'neotech') == 'neotech' ? 'active' : ''}}" href="/our-ventures?tab=neotech">NEOTECH Multicity Engineering Consultancy</a></li>
                                            <li><a class="{{request()->get('tab') == 'neha' ? 'active' : ''}}" href="/our-ventures?tab=neha">NEHA Construction</a></li>
                                            <li><a class="{{request()->get('tab') == 'trade' ? 'active' : ''}}" href="/our-ventures?tab=trade">Trade</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a class="{{request()->routeIs(['threed_elevation', 'interior_design', 'live_site_photos', 'trade']) ? 'active' : null}}" href="#">Gallery</a>
                                        <ul class="dropdown">
                                            <li><a class="{{request()->routeIs('threed_elevation') ? 'active' : null}}" href="/gallery/3d-elevation">3D ELEVATION</a></li>
                                            <li><a class="{{request()->routeIs('interior_design') ? 'active' : null}}" href="/gallery/interior-design">INTERIOR DESIGN</a></li>
                                            <li><a class="{{request()->routeIs('live_site_photos') ? 'active' : null}}" href="/gallery/live-site-photos">LIVE SITE PHOTOS</a></li>
                                            <li><a class="{{request()->routeIs('trade') ? 'active' : null}}" href="/gallery/trade">Trade</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="{{request()->routeIs('success_story') ? 'active' : null}}" href="/success-story">Success Story</a></li>
                                    <li><a class="{{request()->routeIs('contact_us') ? 'active' : null}}" href="/contact-us">CONTACT US</a></li>
                                    <li><a class="{{request()->routeIs('career') ? 'active' : null}}" href="/career">Career</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $slot }}

    <!-- Footer area -->
    <footer class="section bg-black">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row mb-n8">
                    <div class="col-4 mb-8">
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <a href="/"><img class="white-logo img-fluid" src="{{ asset('images/logo.png') }}"
                                        alt="logo"></a>
                            </div>
                            <p>Lorem Ipsum is simply dummy text datra of the printing and typesetting industry.</p>
                            <div class="social-icon-style">
                                <a class="facebook" href="https://www.facebook.com/profile.php?id=100003057155534"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="twitter"
                                    href="https://www.instagram.com/invites/contact/?i=2ht2ws8krw56&amp;utm_content=11pw5by"><i
                                        class="fa fa-instagram"></i></a>
                                <a class="google-plus"href="https://youtu.be/R2prbXlE1HI"><i
                                        class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mb-8">
                        <div class="footer-widget footer-list">
                            <h3 class="footer-title">Useful Link</h3>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="/contact-us">Help & Contact Us</a></li>
                                <li><a href="#">Terms of Service </a></li>
                                <li><a href="#">Our Blogs</a></li>
                                <li><a href="/contact-us">Contact Us </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4 mb-8">
                        <div class="footer-widget footer-list">
                            <h3 class="footer-title">Contact Us</h3>
                            <ul>
                                <li>
                                    <span class="title">T:</span>
                                    <span class="desc">+012 3456 7890</span>
                                </li>
                                <li>
                                    <span class="title">E:</span>
                                    <span class="desc">info@example.com <br>demo@example.com</span>
                                </li>
                                <li>
                                    <span class="title">A:</span>
                                    <span class="desc">962 fifth avenue, 3rd floor new york, ny10022</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>Copyright ©2021 All rights reserved | Made with <i class="fa fa-heart"></i> by Gagnani Group.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/hoverparallax.min.js') }}"></script>
    <script src="{{ asset('js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js/plugins/odometer.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ddbeforeandafter.js') }}"></script>
    <script src="{{ asset('js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/plugins/imagesloaded.js') }}"></script>
    <script src="{{ asset('js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('js/plugins/aos.js') }}"></script>
    <script src="{{ asset('js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>

    <!-- Activation JS -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(function() {
            $('.popup-youtube, .popup-vimeo').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });

        $(function() {
            $('.open-popup-link').magnificPopup({
                type: 'inline',
                midClick: true,
                closeBtnInside: true,
                removalDelay: 300,
                mainClass: 'mfp-fade'
            });
        });


        var swiper = new Swiper(".tc-testimonials-style1 .marq-slider", {
            slidesPerView: "auto",
            spaceBetween: 140,
            centeredSlides: true,
            slidesPerView: "auto",
            speed: 10000,
            autoplay: {
                delay: 1,
            },
            loop: true,
            //   allowTouchMove: false,
            disableOnInteraction: true,
        });
    </script>

</body>


</html>
