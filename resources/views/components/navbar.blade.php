<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('welcome')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrazione</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Log In</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="">Benvenut* {{Auth::user()->name}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('createAnnounce')}}">Crea Annuncio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('indexAnnounce')}}">Lista Annunci</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LogOut</a>
           <form id="logout-form" method="POST" class="d-none" action="{{route('logout')}}">
            @csrf
           </form>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>