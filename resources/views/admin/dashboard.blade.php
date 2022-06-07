<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
    <title> Blog</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header bg-danger">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark btn-sm ml-3 mr-3"
                        onclick="return confirm('Are you sure you want to logout')">Logout</button>
                    <span class="text-dark"><b>{{ Auth::user()->name }}</b></span>
                </form>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark bg-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('admin/users') }}"><i class="fa fa-user"
                                        aria-hidden="true"></i>Users</a>
                                <a class="nav-link" href="{{ url('admin/skills') }}"><i
                                        class="fas fa-fw fa-table"></i>Skills</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- jquery 3.3.1 -->
        <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
        <!-- bootstap bundle js -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
        <!-- slimscroll js -->
        <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
        <!-- chart chartist js -->
        <script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
        <!-- sparkline js -->
        <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
        <!-- morris js -->
        <script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}"></script>
        <!-- chart c3 js -->
        <script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
        <script src="{{ asset('assets/libs/js/dashboard-ecommerce.js') }}"></script>
</body>

</html>
