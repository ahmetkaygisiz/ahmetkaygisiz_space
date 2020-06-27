<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
  
  <title>Home Sweet Home</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
      <div class="container">
        <div class="mHeader">
          <h5> < ahmet kaygisiz /> </h5>
        </div>  
      </div>
      <hr>

      <div class="container">
          <div class="navbar-links">
              <ul class="list-unstyled components mb-5">
                <li>
                  <a  href="{{ url('/admin') }}">Panel</a>
                </li>   
                <li>
                    <a  href="{{ url('/') }}"> 127.0.0.1 </a>
                </li>
                <li>
                  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Post</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{ url('/admin/post/create') }}" style="font-size: small; color:burlywood">Oluştur</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/post/') }}" style="font-size: small; color:burlywood;">Listele</a>
                    </li>
                  </ul>
                </li>
                <li>
                    <a  href="{{ url('/') }}">Stats / Kaming Suun</a>
                </li>
              </ul>
          </div>
      </div>
      <hr>

     <div class="container">
      <div class="social-links">
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
     </div>
    </div>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
      <button id="toggleNavBtn" class="toggle-nav-btn" onclick="toggleNav()"> <b>\-.-/</b></button>
        @yield('content')
      <hr>
    </div>
      <!-- Footer -->
      <footer>
        <div class="container">
            <p>Copyright &copy; ahmetkaygisiz.space 2020</p>
        </div>
      </footer>
    </div>


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/home.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/prism.js') }}" ></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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