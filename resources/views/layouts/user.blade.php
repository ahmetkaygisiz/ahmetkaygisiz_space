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
  
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

  <title>This is my bLOGGGG!!!</title>
</head>

<body>
    <div id="mySidenav" class="sidenav">
      <div class="container">
        <div class="mHeader">
          <h5>Ahmet Kaygısız</h5>
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
                    <a  href="{{ url('/') }}">Home</a>
                </li>
                <li>
                  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Post</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="{{ url('/admin/post/create') }}" style="font-size: small; color:burlywood">Oluştur</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/post/all') }}" style="font-size: small; color:burlywood;">Listele</a>
                    </li>
                  </ul>
                </li>
                <li>
                    <a  href="{{ url('/') }}">Stats</a>
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
            <p>Copyright &copy; Your Website 2019</p>
        </div>
      </footer>
    </div>


  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('js/home.js') }}" ></script>

<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );
</script>
  </body>
</html> 
