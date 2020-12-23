<!DOCTYPE html>
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
</head>

<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg px-10 fixed-top">
          <a href="{{ url('/') }}" class="navbar-brand">127.0.0.1</a>
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
                  >ls ~/posts</a
                >
                <ul class="dropdown-menu">
                    <li class="nav-item">
                       <a href="{{ url('/admin/post/create') }}" style="font-size: small; color:burlywood">Oluştur</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/admin/post/') }}" style="font-size: small; color:burlywood;">Listele</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item active mx-4">
                <a href="{{ url('/about') }}" class="nav-link">whoami</a>
              </li>
              <li class="nav-item active mx-4">
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li>
          </a>
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
        @yield('content')
    
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
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/prism.js') }}" ></script>
  <script>
  tinymce.init({
    selector: 'textarea',
    height: 500,
    plugins: [
      "advlist autolink lists link image charmap print preview anchor",
      "searchreplace visualblocks code fullscreen",
      "insertdatetime media table paste imagetools wordcount codesample"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | codesample",
    codesample_languages: [
      { text: 'HTML/XML', value: 'markup' },
      { text: 'Bash', value: 'bash' },
      { text: 'CSS', value: 'css' },
      { text: 'PHP', value: 'php' },
      { text: 'Python', value: 'python' },
      { text: 'Java', value: 'java' },
      { text: 'C', value: 'c' },
      { text: 'SQL', value: 'sql' }  
    ],
    content_css: '//www.tiny.cloud/css/codepen.min.css'
  });
  </script>

  </body>
</html> 