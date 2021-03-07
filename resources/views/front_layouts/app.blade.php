<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="{{ url('assets/css/default.css')}}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{ url('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{ url('assets/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ url('assets/css/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/5.11.2/css/all.min.css')}}">

    @yield('css')
    @yield('css_code')
    <style>
        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #fe4e37;
            border-color: #337ab7;
            margin-right: 5px;
        }

        .pagination>.disabled>a,
        .pagination>.disabled>a:focus,
        .pagination>.disabled>a:hover,
        .pagination>.disabled>span,
        .pagination>.disabled>span:focus,
        .pagination>.disabled>span:hover {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
            margin-right: 10px;
        }

        footer li p {
            line-height: 5px;
            /* margin-left: 60px; */
        }

        footer li {
            line-height: 25px;
            /* margin-left: 60px; */
        }
    </style>
    <style>
        <?php echo  $menuData['settingData']['custom_style'] ?? '' ?>
    </style>
    <script>
        <?php echo  $menuData['settingData']['custom_script'] ?? '' ?>
    </script>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header start -->
    <header class="main_header_area headerstyle-2">
        <div class="header-content">
            <div class="container">
                <!-- <div class="links links-left"> -->
                <!-- <ul> -->
                <!-- <li> -->
                <marquee style="color: white;"><?php echo $menuData['settingData']['top_msg'] ?? '' ?></marquee>
                <!-- </li> -->
                <!-- <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo  $menuData['settingData']['email'] ?? '' ?></a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo  $menuData['settingData']['mobile'] ?? '' ?></a></li> -->
                <!-- <li>
                            <select>
                                <option>Eng</option>
                                <option>Fra</option>
                                <option>Esp</option>
                            </select>
                        </li> -->
                <!-- </ul> -->
                <!-- </div> -->
                <!-- <div class="links links-right pull-right">
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-pen" aria-hidden="true"></i> Register</a></li>
                        <li>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="header_menu affix-top">
            <nav class="navbar navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('front.index') }}">
                            <img alt="Image" style="width: 120px;" src="<?php
                                                                        if ($menuData["settingData"]["logo"] != "") {
                                                                            echo url('/uploads/logo') . '/' . $menuData["settingData"]["logo"];
                                                                        } else {
                                                                            echo url('/uploads/logo') . '/default.png';
                                                                        }
                                                                        ?>" class="logo-black">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li class="dropdown submenu">
                                <a href="{{ route('front.index') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinations<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    @if(!empty($menuData['regionData']))
                                    @foreach($menuData['regionData'] as $region)
                                    <li class="dropdown submenu">
                                        <a href="#">{{ $region['name'] }}</a>
                                        <ul class="dropdown-menu">
                                            @if(!empty($region->Destination))
                                            @foreach($region->Destination as $dest)
                                            <li><a href="{{ url('destination').'/'.$dest['id'].'/'.Str::slug($dest['name'],'_') }}">{{$dest['name']}}</a></li>
                                            @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="dropdown submenu">
                                <a href="{{ route('front.index') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Packages<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    @if(!empty($menuData['regionData']))
                                    @foreach($menuData['regionData'] as $region)
                                    <li class=""><a href="{{ url('region') }}/{{ $region['id'] }}/{{ Str::slug($region['name'],'_') }}">{{$region['name']}}</a></li>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                        </li>
                        <li><a href="{{ route('front.about_us') }}">About Us</a></li>
                        <li><a href="{{ route('front.contact_us') }}">Contact Us</a></li>
                        <li><a href="{{ route('front.index') }}">Career</a></li>
                        <?php if ($menuData['settingData']['link_1_name'] != "") { ?>
                            <li><a href="<?php echo  $menuData['settingData']['link_1_url'] ?? '' ?>"><?php echo  $menuData['settingData']['link_1_name'] ?? '' ?></a></li>
                        <?php } ?>
                        <?php if ($menuData['settingData']['link_2_name'] != "") { ?>
                            <li><a href="<?php echo  $menuData['settingData']['link_2_url'] ?? '' ?>"><?php echo  $menuData['settingData']['link_2_name'] ?? '' ?></a></li>
                        <?php } ?>
                        <li><a href="<?php echo  $menuData['settingData']['pay_us_link'] ?? '' ?>">Pay Us</a></li>
                        </ul>
                        <div class="nav-btn">
                            <a href="{{ route('front.contact_us') }}" class="btn btn-orange">Book Now</a>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="slicknav-mobile"></div>
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header Ends -->
    @yield('content')

    @yield('js')
    @yield('javascript_code')

    <!-- Footer Starts -->
    <footer style="    padding-top: 0px;" class="footer-style-1">

        <div class="footer-top">
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-about">
                                <h4>Company Info</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius tellus vitae justo blandit ultrices.</p>
                            </div>
                            <div class="footer-payment">
                                <h4>We Accept</h4>
                                <ul>
                                    <li><img src="{{ url('assets/images/icons/visa.png')}}" alt="image"></li>
                                    <li><img src="{{ url('assets/images/icons/mastercard.png')}}" alt="image"></li>
                                    <li><img src="{{ url('assets/images/icons/americanexpress.png')}}" alt="image"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="quick-links">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Rooms</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="Rooms">
                                <h4>Rooms</h4>
                                <ul>
                                    @foreach($menuData['destinationData'] as $dest)
                                    <li><a href="destination/{{ $dest['id'] }}/{{ Str::slug($dest['name'],'_') }}">{{ $dest['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-contact">
                                <h4>Contact info</h4>
                                <ul>
                                    <li>Mobile : <?php echo  $menuData['settingData']['mobile'] ?? '' ?>
                                    </li>
                                    <?php if ($menuData['settingData']['mobile_2'] != "") { ?>
                                        <li style="margin-left: 55px;">
                                            <?php echo  $menuData['settingData']['mobile_2'] ?? '' ?>
                                        </li>
                                    <?php } ?>
                                    <li>Email : <?php echo  $menuData['settingData']['email'] ?? '' ?></li>
                                    <li><br><?php echo  $menuData['settingData']['address'] ?? '' ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-content text-center">
                    <p class="white">Copyright {{ date('Y') }} || <?php echo  $menuData['settingData']['name'] ?? '' ?></p>
                    <!-- <ul>
                        <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="white"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="{{ url('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ url('assets/js/plugin.js')}}"></script>
    <script src="{{ url('assets/js/main.js')}}"></script>
    <script src="{{ url('assets/js/custom-nav.js')}}"></script>
    <script src="{{ url('assets/js/custom-swiper2.js')}}"></script>
    <script src="{{ url('assets/js/custom-singledate.js')}}"></script>
</body>

</html>