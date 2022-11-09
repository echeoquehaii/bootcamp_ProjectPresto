<nav class="navbar navbar-expand-lg bg-nav fixed-top">
  <div class="container-fluid" id="bubble">
    <a class="navbar-brand text-wh" href="{{route('welcome')}}">Stellarian</a>
    <span style="--i:11;"></span>
    <span style="--i:12;"></span>
    <span style="--i:24;"></span>
    <span style="--i:10;"></span>
    <span style="--i:14;"></span>
    <span style="--i:23;"></span>
    <span style="--i:18;"></span>
    <span style="--i:16;"></span>
    <span style="--i:19;"></span>
    <span style="--i:20;"></span>
    <span style="--i:22;"></span>
    <span style="--i:25;"></span>
    <span style="--i:18;"></span>
    <span style="--i:21;"></span>
    <span style="--i:15;"></span>
    <span style="--i:13;"></span>
    <span style="--i:26;"></span>
    <span style="--i:17;"></span>
    <span style="--i:13;"></span>
    <span style="--i:28;"></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
        <li class="nav-item">
          <a class="nav-link text-wh" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link text-wh" href="{{route('register')}}">Registrazione</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-wh" href="{{route('login')}}">Log In</a>
        </li>
        @else
        
        <li class="nav-item">
          <a class="nav-link text-wh" href="{{route('createAnnounce')}}">Crea Annuncio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-wh" href="{{route('indexAnnounce')}}">Lista Annunci</a>
        </li>
        
        <li class="nav-item">
         <a class="nav-link text-wh" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LogOut</a>
         <form id="logout-form" method="POST" class="d-none" action="{{route('logout')}}">
          @csrf
         </form>
        </li>
        
      </ul>
        <a class="nav-link text-wh" href="{{route('welcome')}}">{{Auth::user()->name}}</a>
        @endguest
    </div>
  </div>
</nav>