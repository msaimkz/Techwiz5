<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Asset/Admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Asset/Admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{asset('Asset/Admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Asset/Admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('Asset/Admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('Asset/Admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Asset/Admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('Asset/Admin/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Decor Vista</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">






                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{asset('Asset/Admin/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('Admin.profile') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>





                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('Admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-images"></i>
                    <span>Category</span>
                </a>
            </li>
            


            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-images"></i>
                    <span>Gallery</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-box2-fill"></i>
                    <span>Order Reports</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-newspaper"></i>
                    <span>Blogs</span>
                </a>
            </li>


        </ul>

    </aside><!-- End Sidebar-->


    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('Asset/Admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('Asset/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Asset/Admin/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('Asset/Admin/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('Asset/Admin/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('Asset/Admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{asset('Asset/Admin/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('Asset/Admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset( 'Asset/Admin/js/main.js' )}}"></script>

</body>

</html>