<x-layout>

    
    <h1 class="text-center">Ecco la tua categoria stellare: {{$category->name}}</h1>


    
    <div class="container">
        
        @forelse ($category->announces->reverse() as $announce)
        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$announce->name}}</h5>
                <p class="card-text">{{$announce->user->name}}</p>
                <p class="card-text">{{$announce->price}}</p>
                <p class="card-text">{{$announce->location}}</p>
                <p class="card-text">{{$announce->description}}</p>
                <p class="card-text">{{$announce->category->name}}</p>
                <a href="" class="btn btn-primary">Scopri di più, capi fra?</a>
            </div>
        </div>
        @empty
           <p>Non ci sono oggetti di questa categoriah!</p> 
        @endforelse
    </div>

    
    {{-- <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
        </a>
        <ul class="dropdown-menu">
            @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div> --}}


</x-layout>