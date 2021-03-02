<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <!--favicon-->
    <link rel="icon" href="admin_assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="admin_assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="admin_assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="admin_assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="admin_assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="authentication-bg">
    <!-- Start wrapper-->
    <div id="wrapper">
        <div class="card card-authentication1 mx-auto my-5 animated zoomIn">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="admin_assets/images/logo-icon.png" />
                    </div>
                    <div class="card-title text-uppercase text-center py-2">Sign In</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-left">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mr-0 ml-0">
                            <div class="form-group col-6">
                                <div class="icheck-material-primary">
                                    <!-- <input type="checkbox" id="user-checkbox" checked="" />
                                    <label for="user-checkbox">Remember me</label> -->
                                </div>
                            </div>
                            <div class="form-group col-6 text-right">
                                <a href="#">Forgot Password ?</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light"><i class="ft-unlock"></i> Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="admin_assets/js/jquery.min.js"></script>
    <script src="admin_assets/js/popper.min.js"></script>
    <script src="admin_assets/js/bootstrap.min.js"></script>
    <!-- waves effect js -->
    <script src="admin_assets/js/waves.js"></script>
    <!-- Custom scripts -->
    <script src="admin_assets/js/app-script.js"></script>

</body>

</html>