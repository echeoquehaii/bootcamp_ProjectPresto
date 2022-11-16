<nav class="navbar navbar-expand-lg fixed-top mb-3">
  <div class="container-fluid collapsedNavContainer">
    <a class="navbar-brand text-wh hover-underline-animation nav-link titles" href="{{route('welcome')}}"><img src="/img/logo.png" alt="" class="logoSize"> PRESTO</a>
  
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
            <a class="nav-link text-wh hover-underline-animation" href="{{route('register')}}">{{__('ui.registrazione')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-wh hover-underline-animation" href="{{route('login')}}">{{__('ui.login')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-wh hover-underline-animation" href="{{route('indexAnnounce')}}">{{__('ui.listaAnnunci')}}</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link text-wh hover-underline-animation" href="{{route('indexAnnounce')}}">{{__('ui.listaAnnunci')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-wh hover-underline-animation" href="{{route('createAnnounce')}}">{{__('ui.creaAnnuncio')}}</a>
          </li>
          <li>
            <div class="nav-item dropdown hover-underline-animation">
                <p class="nav-link dropdown-toggle text-wh mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{__('ui.categorie')}}
                </p>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item text-white hover-underline-animation" href="{{route('categoryShow', compact('category'))}}"><x-categoriesLocale :category="$category"/></a></li>
                    @endforeach
                </ul>
            </div>
          </li>
        @endguest
        <li>
          <form action="{{route('searchAnnounces')}}" method="GET" class="d-flex" id="noShow">
            <div class="searchBox">
              <div class="search"><i class="fa-solid fa-magnifying-glass"></i></div>
              <div class="searchInput">
                <input name="searched" type="text" placeholder="{{__('ui.cerca')}}" aria-label="Search" class="searchBoxInputField">
              </div>
              <div class="close"><i class="fa-sharp fa-solid fa-xmark"></i></div>
            </div>           
          </form>
        </li>

        <li>
          <div class="btn-group nav-item hover-underline-animation text-wh">
            <p class="nav-link dropdown-toggle text-wh mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-language"></i>
              {{-- {{__('ui.lingua')}} --}}
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
          @auth
            <div class="nav-item dropdown mx-3">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="hover-underline-animation text-white">{{Auth::user()->name}}</span></a>
              <div class="dropdown-menu dropdown-menu-end" id="userdropjs">
                <li>
                  <a href="#" class="hover-underline-animation dropdown-item userdropjs-item text-white">{{__('ui.profilo')}}</a>
                </li>
                @if(Auth::user()->is_revisor)
                  <li> 
                    <a href="{{route('indexRevisor')}}" id="noShow" class="hover-underline-animation dropdown-item userdropjs-item text-white">{{__('ui.zonaRevisore')}} <span>{{App\Models\Announce::toBeRevisionedCount()}}
                      <span class="visually-hidden">unread messages</span>
                    </a>
                  </li>             
                @endif
                <li>
                  <a class="me-5 hover-underline-animation dropdown-item userdropjs-item text-white" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('ui.logout')}}</a>
                  <form id="logout-form" method="POST" class="d-none" action="{{route('logout')}}">
                    @csrf
                  </form>
                </li>
              </div>
            </div>
          @endauth
    </div>
    @guest
      <p class="text-transparent" ><img src="/img/logo-transparent.png" alt="" class="logoSize"> Presto</p>
    @endguest
  </div>
</nav>