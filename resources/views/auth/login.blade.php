<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap Template</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../../css/mdb.min.css" rel="stylesheet">

  <style>

  html,
  body,
  header,
  .view {
    height: 100vh;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 815px;
    }
  }

  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view  {
      height: 650px;
    }
  }

  .intro-2 {
    background: url("{{asset('img/Fondo_login.jpg')}}")no-repeat center center;
    background-size: cover;
  }

  @media (max-width: 768px) {
    .navbar:not(.top-nav-collapse) {
      background: #3f51b5 !important;
    }
  }
  @media (min-width: 800px) and (max-width: 850px) {
    .navbar:not(.top-nav-collapse) {
      background: #3f51b5!important;
    }
  }

  .card {
    background-color: rgba(229, 228, 255, 0.2);
  }
  .md-form label {
    color: #ffffff;
  }
  h6 {
    line-height: 1.7;
  }


  .md-form input[type=text]:focus:not([readonly]),
  .md-form input[type=password]:focus:not([readonly]) {
    border-bottom: 1px solid #8EDEF8;
    box-shadow: 0 1px 0 0 #8EDEF8;
  }
  .md-form input[type=text]:focus:not([readonly])+label,
  .md-form input[type=password]:focus:not([readonly])+label {
    color: #8EDEF8;
  }

  .md-form .form-control {
    color: #fff;
  }

  </style>

</head>

<body>


  <!--Main Navigation-->
  <header>

    <!--Intro Section-->
    <section class="view intro-2">
      <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

              <!-- Card -->
              <div class="card">

                <!-- Card body -->
                <div class="card-body">

                  <!-- Material form register -->
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <p class="h4 text-center py-4">{{ __('Login') }}</p>

                    <!-- Material input email -->
                    <div class="md-form">
                      <i class="fa fa-envelope prefix grey-text"></i>
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      <label for="email" >{{ __('E-Mail Address') }}</label>

                      @if ($errors->has('email'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif

                    </div>

                    <!-- Material input password -->
                    <div class="md-form">
                      <i class="fa fa-lock prefix grey-text"></i>
                      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                      <label for="password" class="font-weight-light">{{ __('Password') }}</label>
                    </div>

                    <div class="text-center py-4 mt-3">
                      <button class="btn btn-cyan" type="submit">{{ __('Login') }}</button>
                    </div>
                  </form>
                  <!-- Material form register -->

                </div>
                <!-- Card body -->

              </div>
              <!-- Card -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
  <!--Main Navigation-->


  <!--  SCRIPTS  -->
  <!-- JQuery -->
  <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
  <script>
  new WOW().init();
  </script>
</body>
</html>
