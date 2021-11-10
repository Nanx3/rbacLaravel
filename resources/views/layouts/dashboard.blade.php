<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoolAdmin</title>

    <!-- Fontfaces CSS-->
    <link href="{!! asset('theme/css/font-face.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/font-awesome-4.7/css/font-awesome.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/font-awesome-5/css/fontawesome-all.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/mdi-font/css/material-design-iconic-font.min.css') !!}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{!! asset('theme/vendor/bootstrap-4.1/bootstrap.min.css') !!}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{!! asset('theme/vendor/animsition/animsition.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/wow/animate.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/css-hamburgers/hamburgers.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/slick/slick.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/select2/select2.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('theme/vendor/perfect-scrollbar/perfect-scrollbar.css') !!}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{!! asset('theme/css/theme.css') !!}" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        @yield('page')

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        @include('layouts.partials.sidebar')
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('layouts.partials.header-desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>



    <!-- Jquery JS-->
    <script src="{!! asset('theme/vendor/jquery-3.2.1.min.js') !!}"></script>
    <!-- Bootstrap JS-->
    <script src="{!! asset('theme/vendor/bootstrap-4.1/popper.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/bootstrap-4.1/bootstrap.min.js') !!}"></script>
    <!-- Vendor JS       -->
    <script src="{!! asset('theme/vendor/slick/slick.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/wow/wow.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/animsition/animsition.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/counter-up/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/counter-up/jquery.counterup.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/circle-progress/circle-progress.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>
    <script src="{!! asset('theme/vendor/chartjs/Chart.bundle.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/select2/select2.min.js') !!}"></script>

    <!-- Main JS-->
    <script src="{!! asset('theme/js/main.js') !!}"></script>
</body>
</html>