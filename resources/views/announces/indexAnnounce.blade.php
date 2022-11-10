<x-layout>

    <h1 class="text-center">Ecco gli Annunci!</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mt-3">
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

   
    <div class="container">
        <div class="row mt-custom">
            @foreach ($announces as $announce)
            
            <div class="col-12 col-md-4 mt-custom">
                <div class="card0">
                    <div class="lines"></div>
                    <div class="imgBx">
                        <img src="https://picsum.photos/200/300" alt="" class="imageBx">
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>{{$announce->name}}</h2>
                            <div class="data">
                                <h3>Venditore: {{$announce->user->name}}</h3>
                                <h3>Categoria: {{$announce->category->name}}</h3>
                            </div>
                            <div class="actionBtn">
                                <a href="{{route('detAnnounce', compact('announce'))}}"><button>Vai al dettaglio</button></a>
                            </div>
                        </div>
        
                    </div>
                    
                 </div> 
            </div>
            
            @endforeach       
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-flex justify-content-center">
                {{$announces->links()}}
            </div>
        </div>
    </div>
   
        
</x-layout>