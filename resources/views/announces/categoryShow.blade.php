<x-layout>

    
    
    
    <div class="container-fluid height">
        <div class="row mt-custom">
            @if ($acceptedAnnounces->isNotEmpty())
            <h1 class="text-center mt-3 pt-5 mb-5">Ecco la tua categoria stellare: {{$category->name}}</h1>
            @foreach ($acceptedAnnounces as $announce)
            
            <div class="col-12 col-md-4 mt-custom mx-0 card-height d-flex justify-content-center">
                <div class="card0">
                    <div class="lines"></div>
                    <div class="imgBx pb-0">
                        <img src="{{!$announce->images()->get()->isEmpty() ? Storage::url($announce->images()->first()->path) : 'https://picsum.photos/200/300'}}" alt="" class="imageBx pb-0">
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
            @endforeach
            @else
            <h1 class=" text-wh d-flex justify-content-center mt-3 pt-5 mb-5">Non ci sono annunci per questa categoria</h4>
                @auth
                    <div class="container d-flex justify-content-center mt-5">
                        <a href="{{route('createAnnounce')}}"><button class=" btn btn-custom">Inserisci annuncio</button><i></i></a>
                    </div>
                @endauth 
            @endif
            
        
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