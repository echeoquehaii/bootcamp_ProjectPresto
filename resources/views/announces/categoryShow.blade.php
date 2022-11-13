<x-layout>

    
    <h1 class="text-center mt-custom">Ecco la tua categoria stellare: {{$category->name}}</h1>
    
    <div class="container-fluid height">
        <div class="row mt-custom">
            @forelse ($acceptedAnnounces as $announce)
            <div class="col-12 col-md-4 mt-custom mx-0 card-height d-flex justify-content-center">
                <div class="card0">
                    <div class="lines"></div>
                    <div class="imgBx pb-0">
                        <img src="https://picsum.photos/200/300" alt="" class="imageBx pb-0">
                    </div>
                    <div class="content pb-2 pt-0">
                        <div class="details pb-2 pt-0">
                            <h2 class="cardTitle pb-4">{{$announce->name}}</h2>
                            <div class="data pb-2">
                                <h3>Venditore: {{$announce->user->name}}</h3>
                                <h3>Categoria: {{$announce->category->name}}</h3>
                            </div>
                            <div class="actionBtn pb-2">
                                <a href="{{route('detAnnounce', compact('announce'))}}"><button>Vai al dettaglio</button></a>
                            </div>
                        </div>
        
                    </div>
                    
                </div> 
            </div>
            @empty
                <p>Non ci sono oggetti di questa categoria!</p>
                @auth
                    <div class="container height">
                        <a href="{{route('createAnnounce')}}"><button class="btn btn-warning">Inserisci annuncio</button></a>
                    </div>
                @endauth 
            @endforelse
        
         </div> 
    </div>

{{--     <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 d-flex justify-content-center mt-3">
                {{$acceptedAnnounces->links()}}
            </div>
        </div>
    </div> --}}



</x-layout>