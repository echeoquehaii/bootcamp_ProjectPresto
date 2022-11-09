<x-layout>

    
    <h1 class="text-center mt-custom">Ecco la tua categoria stellare: {{$category->name}}</h1>

    
    <div class="container">
        <div class="row">
            @forelse ($category->announces as $announce)
                <div class="col-12 col-md-4">
                    <div class="card my-3 g-0 mx-auto" style="width: 18rem;">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$announce->name}}</h5>
                            <p class="card-text">{{$announce->user->name}}</p>
                            <p class="card-text">{{$announce->category->name}}</p>
                            <a href="{{route('detAnnounce', compact('announce'))}}" class="btn btn-primary">Vai al dettaglio</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Non ci sono oggetti di questa categoriah!</p>
            @auth
             <div class="container">
                 <a href="{{route('createAnnounce')}}"><button class="btn btn-warning">Inserisci annuncio</button></a>
             </div>
            @endauth 
        @endforelse
         </div>


</x-layout>