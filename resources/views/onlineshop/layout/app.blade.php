<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Grey Avenue</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/overrides.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
      <a class="navbar-brand ml-5" href="#">
        <img src="{{ asset('images/logo.png') }}">
      </a>
      <button class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#myNav" 
        aria-controls="myNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="myNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
              <i class="fa fa-home"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-info"></i> About Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-shopping-cart"></i> Shop
            </a>
          </li>
          @if (Auth::guest())
              <li class="nav-item">
                <a href="{{ url('/customer/login') }}" class="nav-link">
                  <i class="fa fa-sign-in"></i> Login
                </a>
              </li>

              {{-- Tempo Logout --}}
              {{-- <li class="nav-item">
                <a href="{{ url('/customer/logout') }}" class="nav-link" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-in"></i> Logout
                </a>
              </li>
              <form id="logout-form" action="{{ url('/customer/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form> --}}
          @else
            {{-- display logout link here --}}
          @endif
        </ul>

      </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
