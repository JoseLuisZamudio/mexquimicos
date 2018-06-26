<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">--}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    {{-- <script language="JavaScript" type="text/javascript" src="/js/jquery-3.2.1.min.js"></script> --}}

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <style>

      .jarallax {
        height: 700px;
      }

      @media (max-width: 740px) {
        html,
        body,
        header,
        .jarallax {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .jarallax {
          height: 100vh;
        }
      }

      @media (min-width: 560px) and (max-width: 650px) {
        header .jarallax h1 {
          margin-bottom: .5rem !important;
        }
        header .jarallax h5 {
          margin-bottom: .5rem !important;
        }
      }

      @media (min-width: 660px) and (max-width: 700px) {
        header .jarallax h1 {
          margin-bottom: 1.5rem !important;
        }
        header .jarallax h5 {
          margin-bottom: 1.5rem !important;
        }
      }


      @media (max-width: 768px) {
        .navbar:not(.top-nav-collapse) {
          background: #7283A7 !important;
        }
      }
      @media (min-width: 800px) and (max-width: 850px) {
          .navbar:not(.top-nav-collapse) {
              background: #7283A7!important;
          }
      }

      footer.page-footer {
        background-color: #383838;
      }

      @media (max-width: 450px) {
        .display-3 {
          font-size: 3rem;
        }
      }
    </style>

</head>
<body>
    <div id="app">

        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('home') }}">
                <strong>Mexquimicos</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ url('/') }}">Inicio
                          <span class="sr-only">(current)</span>
                      </a>
                  </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Productos
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                  </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>

                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('productos.index')}}">Admin Productos</a>
                      </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

        <main>
            @yield('content')
        </main>
    </div>
</body>

<script>
$('#delete').on('show.bs.modal',function(event){
  var button = $(event.relatedTarget)

  var cat_id = button.data('catid')
  var modal = $(this)

  modal.find('.modal-body #cat_id').val(cat_id);
})

</script>
<script src="{{ asset('js/dropzone.js')}}"></script>
</html>
