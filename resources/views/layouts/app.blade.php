<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <!-- Styles -->
  {{ Html::style('css/all.css') }}

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
    ]); ?>
  </script>
</head>
<body>

 <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="{{ preg_match('#projects#', request()->path()) ? 'active' : '' }}"><a href="{{ route('projects.index') }}">Projects</a></li>
          <li class="{{ preg_match('#slots#', request()->path()) ? 'active' : '' }}"><a href="{{ route('slots.index') }}">Slots</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::getUser()->full_name }} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('logout') }}">Logout</a></li>
              </ul>
            </li>
          @else
            <li><a href="{{ url('register') }}">Register</a></li>
            <li><a href="{{ url('login') }}">Login</a></li>
          @endif
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div> <!-- /container -->

  {{ Html::script('js/all.js') }}
</body>
</html>