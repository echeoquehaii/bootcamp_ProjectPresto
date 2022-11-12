<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <div class="container-fluid">     
    <a class="navbar-brand text-wh" href="{{route('welcome')}}"><img src="/img/f.png" alt="" class="logoSize"> Presto</a>

    
    
    <button class="navbar-toggler" style="white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <li>
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-4 d-flex justify-content-center">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </li>
        <li>
          <form action="{{route('searchAnnounces')}}" method="GET" class="d-flex" id="noShow">
            <input name="searched" class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-warning" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </li>
        
        
        
      </ul>
      
        <a class="nav-link text-wh me-5" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LogOut</a>
          <form id="logout-form" method="POST" class="d-none" action="{{route('logout')}}">
         @csrf
          </form>
     
        @if(Auth::user()->is_revisor)
          <a href="{{route('indexRevisor')}}" id="noShow">Zona revisore</a>
          <span>{{App\Models\Announce::toBeRevisionedCount()}}
            <span class="visually-hidden">unread messages</span>
           </span>
        @endif
          <a class="nav-link text-wh" href="{{route('welcome')}}">Benvenuto:{{Auth::user()->name}}</a>
        @endguest
    </div>
  </div>
</nav>