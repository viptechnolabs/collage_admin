<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>College Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href=" {{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="#"><img src="{{asset('images/logo.svg')}}" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{asset('images/faces/face1.jpg')}}" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">David Greymaax</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="{{asset('images/faces/face1.jpg')}}" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">David Grey. H</span>
                            <span class="text-secondary text-small">Project Manager</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#school_college_university" aria-expanded="false" aria-controls="ui-basic">
                        <span class="menu-title">School / College / University</span>
                        <i class="menu-arrow"></i>
{{--                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>--}}
                    </a>
                    <div class="collapse" id="school_college_university">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('university') }}">List of University</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add_university') }}">Add University</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('college') }}">List of College</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route('add_college')}}">Add College</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('school') }}">List of School</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add_school') }}">Add School</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#student" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Student</span>
                        <i class="menu-arrow"></i>
{{--                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
                    </a>
                    <div class="collapse" id="student">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">List of Student</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Add Student</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#certificate" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Certificate</span>
                        <i class="menu-arrow"></i>
                        {{--                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
                    </a>
                    <div class="collapse" id="certificate">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">Claim Certificate</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#student" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Student</span>
                        <i class="menu-arrow"></i>
                        {{--                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
                    </a>
                    <div class="collapse" id="student">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">Student Enrollment Form</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Student List</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#certificate" aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Certificate</span>
                        <i class="menu-arrow"></i>
                        {{--                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
                    </a>
                    <div class="collapse" id="certificate">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="#">Generate Certificate</a></li>
                            <li class="nav-item"> <a class="nav-link" href="#">Certificate List</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse"  aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Profile</span>
{{--                        <i class="menu-arrow"></i>--}}
                        {{--                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse"  aria-expanded="false" aria-controls="general-pages">
                        <span class="menu-title">Help and Support</span>
                        {{--                        <i class="menu-arrow"></i>--}}
                        {{--                        <i class="mdi mdi-medical-bag menu-icon"></i>--}}
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /top navigation -->
{{--        <div class="right_col" role="main">--}}
{{--            <div class="main-panel">--}}
        <div class="main-panel">
            @yield('content')
        </div>
{{--            </div>--}}
{{--        </div>--}}

    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/todolist.js')}}"></script>
<!-- End custom js for this page -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
