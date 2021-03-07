<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <link rel="icon" href="{{ url('admin_assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="{{ url('admin_assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ url('admin_assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ url('admin_assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ url('admin_assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ url('admin_assets/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ url('admin_assets/css/app-style.css') }}" rel="stylesheet" />
    <link href="{{ url('admin_assets/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet" />
    <link href="{{ url('admin_assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <style>
        table td {
            word-wrap: break-word;
        }

        .datatable td {
            white-space: initial;
        }
    </style>
    @yield('css')
    @yield('css_code')

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">



        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top gradient-ibiza">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>

                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="{{ url('admin_assets/images/avatars/avatar-17.png') }}"" class=" img-circle" alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3" src="{{ url('admin_assets/images/avatars/avatar-17.png') }}"" alt=" user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Admin</h6>
                                            <p class="user-subtitle">admin@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li> -->
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i>
                                <!-- <a href="{{ url('/logout') }}"> -->
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>


        @include('layouts.sidebar')
        <div class="app-content content">

            <div class="content-wrapper">
                @if(Session::has('message'))
                <!-- <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon contrast-alert">
                        <i class="icon-check"></i>
                    </div>
                    <div class="alert-message">
                        <span><strong>Success!</strong>{{ Session::get('message') }}</span>
                    </div>
                </div> -->
                @endif
                @yield('content')
            </div>
        </div>
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © <?php echo date('Y'); ?>
                </div>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('admin_assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ url('admin_assets/js/bootstrap.min.js') }}"></script>

    <!-- simplebar js -->
    <script src="{{ url('admin_assets/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- waves effect js -->
    <script src="{{ url('admin_assets/js/waves.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ url('admin_assets/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ url('admin_assets/js/app-script.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/alerts-boxes/js/sweetalert.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/notifications/js/lobibox.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/notifications/js/notifications.min.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/notifications/js/notification-custom-script.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('admin_assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('js')
    @yield('javascript_code')

    @include('layouts.footer_script')
    <style>
        .mr_top_10 {
            margin-top: 10px;
        }

        .mr_right_10 {
            margin-right: 10px;
        }

        hr {
            border-top: 1px solid black;
        }

        .table td,
        .table th {
            white-space: initial;
        }
    </style>
</body>

</html>