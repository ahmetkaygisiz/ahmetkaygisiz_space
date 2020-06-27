<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  


    <link rel="icon" type="image/png" href="{{ asset('imgs/logo.png') }}"/>
    
    <title>ahmetkaygisiz.space</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
      
        <!-- Header -->
        <div class="container">
            <div class="mHeader">
                <h5>< ahmet kaygisiz /></h5>
            </div>  
        </div>
        <hr>

        <!-- Navbar Links -->
        <div class="container">
            <div class="navbar-links">
                <ul class="list-unstyled components mb-5">
                    @if (Auth::check())
                    <li>
                        <a href="{{ url('/admin') }}">Panel</a>
                    </li>   
                    @endif
                    
                    <li><a href="{{ url('/') }}">Ana Sayfa</a></li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kategoriler</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('category.show',$category->id)}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}">Hu em ay?</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        
        <!-- Social Media Links -->
        <div class="container">
            <div class="social-links">
                <a href="https://twitter.com/kaaygisiz">
                    <svg class="svg-inline--fa fa-twitter fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter fa-fw"></i> --></a>
                </a>
                <a href="https://www.linkedin.com/in/ahmetkaygisiz/">
                    <svg class="svg-inline--fa fa-linkedin-in fa-w-14 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg><!-- <i class="fab fa-linkedin-in fa-fw"></i> --></a>
                </a>
                <a href="https://github.com/ahmetkaygisiz">
                    <svg class="svg-inline--fa fa-github-alt fa-w-15 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512" data-fa-i2svg=""><path fill="currentColor" d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z"></path></svg><!-- <i class="fab fa-github-alt fa-fw"></i> --></a>
                </a>
                <a href="https://medium.com/@ahmetkaygisiz">
                <svg class="svg-inline--fa fa-medium-alt fa-w-15 fa-fw" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github-alt" role="img" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50"><path fill="currentColor" d="M 47.507813 12.441406 C 47.460938 12.375 47.410156 12.308594 47.351563 12.25 C 47.300781 12.195313 47.25 12.140625 47.191406 12.09375 C 47.054688 11.972656 46.910156 11.863281 46.742188 11.78125 L 34.777344 5.71875 L 34.066406 5.359375 C 34.066406 5.359375 34.0625 5.359375 34.0625 5.359375 C 33.839844 5.246094 33.601563 5.160156 33.359375 5.101563 C 33.09375 5.035156 32.820313 5 32.550781 5 C 31.351563 5 30.226563 5.628906 29.609375 6.636719 L 27.84375 9.546875 L 22.578125 18.210938 L 19.738281 12.65625 C 19.519531 12.296875 19.214844 12.015625 18.851563 11.832031 L 6.839844 5.753906 C 6.839844 5.75 6.835938 5.75 6.832031 5.746094 L 6.453125 5.558594 C 5.953125 5.304688 5.4375 5.175781 4.921875 5.175781 C 3.257813 5.175781 2 6.523438 2 8.3125 L 2 35.367188 C 2 36.84375 2.949219 38.394531 4.261719 39.058594 L 15.160156 44.574219 C 15.714844 44.855469 16.28125 45 16.847656 45 C 18.675781 45 20 43.5625 20 41.578125 L 20 32.847656 L 42 44 L 42 43.988281 L 42.769531 44.378906 C 43.441406 44.71875 44.113281 44.890625 44.769531 44.890625 C 46.640625 44.890625 48 43.496094 48 41.578125 L 48 13.835938 C 48 13.3125 47.8125 12.835938 47.507813 12.441406 Z M 18 41.578125 C 18 42.46875 17.523438 43 16.847656 43 C 16.609375 43 16.34375 42.933594 16.0625 42.792969 L 5.164063 37.273438 C 4.523438 36.949219 4 36.089844 4 35.367188 L 4 8.3125 C 4 7.597656 4.378906 7.175781 4.921875 7.175781 C 5.113281 7.175781 5.328125 7.226563 5.550781 7.339844 L 5.933594 7.535156 C 5.933594 7.535156 5.9375 7.535156 5.9375 7.535156 L 17.949219 13.617188 C 17.96875 13.628906 17.984375 13.648438 18 13.664063 Z M 30.585938 8.882813 L 31.320313 7.675781 C 31.582031 7.246094 32.0625 7 32.550781 7 C 32.664063 7 32.78125 7.015625 32.894531 7.046875 C 32.980469 7.066406 33.070313 7.097656 33.164063 7.144531 L 45.832031 13.558594 C 45.835938 13.558594 45.835938 13.5625 45.835938 13.5625 L 45.847656 13.566406 C 45.855469 13.570313 45.855469 13.582031 45.863281 13.585938 C 45.925781 13.636719 45.953125 13.722656 45.910156 13.792969 L 33.292969 34.558594 L 32.003906 36.675781 L 23.644531 20.304688 Z M 20 30.605469 L 20 17.5625 L 28.980469 35.15625 L 20.902344 31.066406 Z M 46 41.578125 C 46 42.414063 45.503906 42.890625 44.773438 42.890625 C 44.445313 42.890625 44.070313 42.796875 43.675781 42.597656 L 41.867188 41.679688 L 33.789063 37.589844 L 46 17.496094 Z"></path></svg>
                </a>
            </div>
         </div>        
        </div>

    <!-- Content Layout -->
    <div id="main">
      <button id="toggleNavBtn" class="toggle-nav-btn" onclick="toggleNav()"> <b>\-.-/</b></button>
       @yield('content')
    </div>
    <hr>
    <footer>
        <div class="container">
            <p>Copyright &copy; ahmetkaygisiz.space 2020</p>
        </div>
    </footer>
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('js/home.js') }}" ></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/prism.js') }}" ></script>

</body>
</html>
