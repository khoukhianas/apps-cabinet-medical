<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>BiblioFsm</title>
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Varela+Round')}}">
<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
<link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<script>
$(document).ready(function() {
  // Ajout de la classe "active" au lien de la page courante
  var url = window.location.href;
  $('.navbar a').each(function() {
    if (url.indexOf($(this).attr('href')) != -1) {
      $(this).addClass('active');
    }
  });

  // Activation de la navbar
  $('.navbar a').on('click', function() {
  $('.navbar a').removeClass('active');
  if($(this).attr('href') != "{{route('acceuil')}}") {
    $(this).addClass('active');
  }
});
});
</script>
</head> 
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:relative;width:100%;">
    <a href="{{route('acceuil')}}" class="navbar-brand">Biblio<b>Fsm</b></a>  		
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="{{route('acceuil')}}" class="nav-item nav-link">Acceuil</a>
            <a href="{{route('index')}}" class="nav-item nav-link">Rechercher un livre</a>			
           
        </div> 
        <div class="navbar-nav ml-auto action-buttons">
            <div class="nav-item dropdown">
              @if (Route::has('login'))
              <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                  @auth
                  <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="" onclick="this.closest('form').submit(); return false;">Deconnecter</a>
                    
                  </form>

                  @else
                      <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Connecter</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Inscription</a>
                      @endif
                  @endauth
              </div>
          @endif
                {{-- <a href="{{route('login')}}"  class="nav-link dropdown-toggle mr-4">Connexion</a> --}}
            </div>
            
        </div>
    </div>
</nav>

{{$slot}} 
</body>
</html>
