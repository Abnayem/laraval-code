<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('page_title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('admin-assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('admin-assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('admin-assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('admin-assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('admin-assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{url('admin-assets/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('dashboard_select')">
                            <a href="{{url('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        
                        <li class="@yield('category_select')">
                           
                            <a href="{{url('admin/category')}}">
                            <i class="fas fa-list"></i>Category</a>
                            
                        
                        
                        </li>
                        
                         <li>
                            <a href="{{url('admin/color')}}">
                           <i class="fas fa-tint"></i>Color</a>
                        </li>

                         <li>
                            <a href="chart.html">
                            <i class="fas fa-window-maximize"></i>Size</a>
                        </li>
                       
                         <li>
                            <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Product</a>
                        </li>
                        <li>
                            <a href="chart.html">
                            <i class="fas fa-address-book"></i>Contact</a>
                        </li>
                        <li>
                            <a href="chart.html">
                            <i class="fas fa-user"></i>Users</a>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Abu Nayem</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                       
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Welcome</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                
                                            
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{url('admin/logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                     @section('container')    
                   @show
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{url('admin-assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('admin-assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{url('admin-assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

    <!-- Vendor JS       -->
    <script src="{{url('admin-assets/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{url('admin-assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{url('admin-assets/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{url('admin-assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{url('admin-assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('admin-assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{url('admin-assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('admin-assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('admin-assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{url('admin-assets/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{url('admin-assets/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
