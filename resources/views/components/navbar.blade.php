<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid collapsedNavContainer">
    <a class="navbar-brand text-wh hover-underline-animation nav-link" href="{{route('welcome')}}"><img src="/img/logo.png" alt="" class="logoSize"> Presto</a>
  
    <button class="navbar-toggler" style="white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon navbar-dark"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
        
        <li class="nav-item">
          <a class="nav-link text-wh hover-underline-animation" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link text-wh hover-underline-animation" href="{{route('register')}}">Registrazione</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-wh hover-underline-animation" href="{{route('login')}}">Log In</a>
        </li>
        @else
        
        <li class="nav-item">
          <a class="nav-link text-wh hover-underline-animation" href="{{route('createAnnounce')}}">Crea Annuncio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-wh hover-underline-animation" href="{{route('indexAnnounce')}}">Lista Annunci</a>
        </li>
        <li>
          <div class="nav-item dropdown hover-underline-animation">
              <p class="nav-link dropdown-toggle text-wh mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorie
              </p>
              <ul class="dropdown-menu">
                  @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                  @endforeach
              </ul>
          </div>
        </li>
        
        <li>
          <form action="{{route('searchAnnounces')}}" method="GET" class="d-flex" id="noShow">
            <div class="searchBox">
              <div class="search"><i class="fa-solid fa-magnifying-glass"></i></div>
              <div class="searchInput">
                <input name="searched" type="text" placeholder="Cerca" aria-label="Search" class="searchBoxInputField">
              </div>
              <div class="close"><i class="fa-sharp fa-solid fa-xmark"></i></div>
            </div>           
          </form>
        </li>

        <li>
          <div class="btn-group nav-item hover-underline-animation text-wh">
            <p class="nav-link dropdown-toggle text-wh mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lingua
            </p>
            <ul class="dropdown-menu">
              <li class="nav-item">
                <x-_locale lang="it" nation="it"></x-_locale>
              </li>
              <li class="nav-item">
                <x-_locale lang="en" nation="gb"></x-_locale>
              </li>
              <li class="nav-item">
                <x-_locale lang="es" nation="es"></x-_locale>
              </li>
              <li class="nav-item">
                <x-_locale lang="no" nation="no"></x-_locale>
              </li>
            </ul>
          </div>
        </li>
      </ul>
        
        
        
        
      
          <div class="nav-item dropdown mx-3">
          <a class="nav-link text-wh dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="hover-underline-animation">{{Auth::user()->name}}</span></a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a href="#" class="hover-underline-animation dropdown-item">Profile</a></li>
            <li>@if(Auth::user()->is_revisor)
              <a href="{{route('indexRevisor')}}" id="noShow" class="hover-underline-animation  dropdown-item">Zona revisore: <span>{{App\Models\Announce::toBeRevisionedCount()}}
                <span class="visually-hidden">unread messages</span>
               </span></a>             
            @endif</li>
            <li><a class=" me-5 hover-underline-animation dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" method="POST" class="d-none" action="{{route('logout')}}">
             @csrf
              </form>
            </li>
          </ul>
        @endguest
    </div>
  </div>
  @guest
  <p class="text-transparent" ><img src="/img/logo-transparent.png" alt="" class="logoSize"> Presto</p>
  @endguest

</nav>