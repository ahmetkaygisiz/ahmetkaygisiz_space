<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  
    <link rel="icon" type="image/png" href="{{ asset('imgs/logo.png') }}"/>
    
    <title>ahmetkaygisiz.space</title>
</head>

<body>
    <!-- sticky header div --> 
    <div class="header py-4">
      <!-- header -->
      <header id="header">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg px-10 fixed-top">
          <a href="{{ url('/') }}" class="navbar-brand"> < ahmet kaygisiz /> </a>
          <button
            type="button"
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="toggler-icon">
              <i class="fas fa-bars"></i>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav mx-auto">
               @if (Auth::check())
                <li class="nav-item active mx-4">
                  <a href="{{ url('/admin') }}" class="nav-link">Panel</a>
                  </li>   
                @endif
              <li class="nav-item active mx-4">
                <a href="{{ url('/') }}" class="nav-link">cd ~</a>
              </li>
              <li class="nav-item dropdown active mx-4">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="true"
                  >ls ~/categories</a
                >
                <ul class="dropdown-menu">
                  @foreach($categories as $category)
                      <li class="nav-item">
                          <a href="{{ route('category.show',$category->id)}}" class="dropdown-item text-center">{{$category->name}}</a>
                      </li>
                  @endforeach
                </ul>
              </li>
              <li class="nav-item active mx-4">
                <a href="{{ url('/about') }}" class="nav-link">whoami</a>
              </li>
            </ul>
            <div class="nav-info-item mx-5">
              <!-- single info -->
              <div
                class="nav-info align-items-center d-flex justify-content-between"
              >
                <span class="social-icons mx-3">
                  <i class="fab fa-github"></i>
                </span>
                <span class="social-icons mx-3">
                  <i class="fab fa-linkedin-in"></i>
                </span>
                <span class="social-icons mx-3">
                  <i class="fab fa-twitter"></i>
                </span>
                <span class="social-icons mx-3">
                  <i class="fab fa-medium"></i>
                </span>
              </div>
            </div>
          </div>
        </nav>
        <!-- end of nav-->
      </header>
      <!-- end of header -->
    </div>
    <!-- end of header div--> 

    <!-- content layout -->
    @yield('content')
    <!--end content layout --> 

    <!-- footer -->
    <div class="footer py-5">
      <footer class="page-footer font-small footer fixed-bottom">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-1">© 2020 Copyright:
          <strong> ahmetkaygisiz.space</strong>
        </div>
        <!-- Copyright -->
      </footer>
    <!-- end of footer -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/prism.js') }}" ></script>
</body>
</html>
