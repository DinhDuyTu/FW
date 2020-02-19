<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/bootstrap-reset.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('bower_components/Asset-FW-Admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/Asset-FW-Admin/css/style-responsive.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="{{ route('login') }}" method="POST">
        @csrf
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            <input type="email" class="form-control" name="email" placeholder="User ID" autofocus>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label class="checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <p>or you can sign in via social network</p>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </div>
            <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.html">
                    Create an account
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/Asset-FW-Admin/js/bootstrap.min.js') }}"></script>


  </body>

<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Aug 2015 03:43:57 GMT -->
</html>
