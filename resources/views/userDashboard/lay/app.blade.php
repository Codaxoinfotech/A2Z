<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A-Z Tech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.webp">

    <!-- CSS
        ============================================ -->

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="{{ asset('public/web/assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/assets/css/plugins/plugins.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/web/assets/css/style.css') }}">

</head>

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>





    <!--====================  header area ====================-->
    <div class="header-area">

        <div class="header-top-bar-info bg-gray d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar-wrap">
                            <div class="top-bar-left">
                                <div class="top-bar-text"><a href="#" class="font-medium display-inline">Now Hiring:</a> Are you a driven and motivated 1st Line IT Support Engineer?</div>
                            </div>
                            <div class="top-bar-right">
                                <ul class="top-bar-info">
                                    <li class="info-item">
                                        <a href="tel:01228899900" class="info-link">
                                            <i class="info-icon fa fa-phone"></i>
                                            <span class="info-text"><strong>0122 8899900</strong></span>
                                        </a>
                                    </li>
                                    <li class="info-item">
                                        <i class="info-icon fa fa-map-marker-alt"></i>
                                        <span class="info-text">58 Howard Street #2 San Francisco</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom-wrap header-sticky bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">
                            <!-- brand logo -->
                            <div class="header__logo">
                                <a href="{{ route('userDashboard') }}">
                                    <img src="{{ asset('public/web/a2ztech.png') }}" width="160" height="48" class="img-fluid" alt="">
                                </a>
                            </div>

                            <div class="header-right">

                                <!-- navigation menu -->
                                <div class="header__navigation menu-style-three d-none d-xl-block">
                                    <nav class="navigation-menu">

                                        <ul>
                                            <li>
                                                <a href="{{ route('history') }}"><span>History</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('profile') }}"><span>Profile</span></a>
                                            </li>

                                            <li>
                                                <a href="{{ route('userLogout') }}"><span>Logout</span></a>
                                            </li>
                                            
                                        </ul>
                                    </nav>
                                </div>

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--====================  End of header area  ====================-->

    @yield('content')

     <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('public/web/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('public/web/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/web/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('public/web/assets/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <script src="{{ asset('public/web/assets/js/plugins/plugins.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('public/web/assets/js/main.js') }}"></script>

    
    <script>
        $(document).ready(function() {
        // show the alert
        setTimeout(function() {
        $(".alert").alert("close");
        }, 4000);
        });
</script>

</body>


</html>
