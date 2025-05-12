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

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/croppie@2.6.5/croppie.min.css">

</head>

<body>
    <div class="container-scroller">
        <!-- top navbar -->
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <div class="logo">
                        <a href="/admin-panel">
                            <img class="black-logo" src="{{ asset('images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : null }}"
                                href="/admin-panel">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ request()->routeIs(['banners.*']) ? 'active' : null }}" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <span> Home <i class="fas fa-angle-down"></i> </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ request()->routeIs('banners.*') ? 'active' : null }}"
                                    href="/admin-panel/banners">Banner</a>
                                <a class="dropdown-item {{ request()->routeIs('showcase.*') ? 'active' : null }}"
                                    href="/admin-panel/showcase">Showcase Section</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : null }}"
                                href="/admin-panel/gallery">
                                <i class="fas fa-images"></i> Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('successStory.*') ? 'active' : null }}"
                                href="/admin-panel/successStory">
                                <i class="fas fa-trophy"></i> Success Story
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('ourTeam.*') ? 'active' : null }}"
                                href="/admin-panel/ourTeam">
                                <i class="fas fa-users"></i> Our Team
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/admin-panel/logout" class="btn btn-outline-danger btn-sm">
                                <span class="fa fa-sign-out"></span> Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Page title header starts -->
                    <div class="row page-title-header">
                        <div class="col-md-12">
                            <div class="page-header-toolbar">
                                <div class="filter-wrapper">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page title header Ends-->
                    {{ $slot }}
                </div>
                <!-- Stacked bar chart ends -->

                <!-- content-wrapper ends -->
                <!-- footer -->
            </div>
            <!-- main-panel ends -->
        </div>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright ©2021 All rights reserved | Made with <i class="fa fa-heart text-danger"></i> by Gagnani
                    Group.
                </p>
            </div>
        </footer>
        <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/croppie@2.6.5/croppie.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ asset('admin/js/moment.min.js') }}"></script>
    <!-- https://momentjs.com/ -->
    <script src="{{ asset('admin/js/Chart.min.js') }}"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{ asset('admin/js/tooplate-scripts.js') }}"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        var barChart, pieChart;
        // DOM is ready
        $(function() {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function() {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>

</body>


</html>
