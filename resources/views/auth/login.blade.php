<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="admin-assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Login | ShinSystemPro</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="admin-assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(admin-assets/img/site-bg.jpg)">
    <div id="wrapper" class="row wrapper">
        <div class="container-min-full-height d-flex justify-content-center align-items-center">
            <div class="login-center">
                <div class="navbar-header text-center mt-2 mb-4">


                        <img src="admin-assets/img/Shinelogo.png" alt="Logo" width="160" height="140" style="" >
                    </a>
                </div>
                @if($errors->any())
                <h4 style="color:red">{{$errors->first()}}</h4>
                @endif
                                <!-- /.navbar-header -->
                <form method="post" action="{{ airoute('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="example-email">Email</label>


                        <input id="email"  type="email" class="form-control form-control-line" @error('email') is-invalid @enderror  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="example-password">Password</label>
                        <input id="password" type="password" class="form-control form-control-line" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-lg btn-primary text-uppercase fs-12 fw-600" type="submit" name="submit">Login</button>
                    </div>
                    <!-- /.form-group -->
                </form>
                <!-- /.form-material -->
                <!-- /.btn-list -->
                <footer class="col-sm-12 text-center">
                    <p><a href="#" class="text-primary m-l-5">Forget Your Password?</a >&nbsp;<strong>|</strong>&nbsp;<a href="/signup/admin" class="text-primary m-l-5">Dont Have An Account?</a></p>
                    <hr>
                    <p><a href="/" class="text-primary m-l-5">Back To Home</a></p>
                </footer>
            </div>
            <!-- /.login-center -->
        </div>
        <!-- /.d-flex -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="admin-assets/js/material-design.js"></script>
</body>

</html>
