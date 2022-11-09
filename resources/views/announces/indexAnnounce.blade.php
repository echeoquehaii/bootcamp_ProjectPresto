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
        <div class="row">
            @foreach ($announces as $announce)
            <div class="col-12 col-md-4">
                <div class="card my-3 g-0 mx-auto" style="width: 18rem;">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$announce->name}}</h5>
                        <p class="card-text">Venditore: {{$announce->user->name}}</p>
                        <p class="card-text">Categoria: {{$announce->category->name}}</p>
                        <a href="{{route('detAnnounce', compact('announce'))}}" class="btn btn-primary">Vai al dettaglio</a>
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