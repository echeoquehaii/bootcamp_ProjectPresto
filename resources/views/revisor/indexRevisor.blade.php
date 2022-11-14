<x-layout>

    
    
    <h1 class="space text-center titles">{{$announce_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare'}} </h1>
    
    @if ($announce_to_check)
    
        <div class="container-fluid vh-100">
            <div class="row align-items-center justify-content-evenly mt-custom1">
                <div class="col-6">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <img src="https://picsum.photos/200/300" />
                              </div>
                              <div class="swiper-slide">
                                <img src="https://picsum.photos/200/300" />
                              </div>
                              <div class="swiper-slide">
                                <img src="https://picsum.photos/200/300" />
                              </div>
                              <div class="swiper-slide">
                                <img src="https://picsum.photos/200/300"/>
                              </div>
                              <div class="swiper-slide">
                                <img src="https://picsum.photos/200/300" />
                              </div>               
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                </div>
                   
                    <div class="col-12 col-md-4">
                        <div class="text-center detText">
                            <h5 class="card-title">Nome: {{$announce_to_check->name}}</h5>
                            <p class="card-text">Venditore: {{$announce_to_check->user->name}}</p>
                            <p class="card-text">Prezzo: {{$announce_to_check->price}} €</p>
                            <p class="card-text">Posizione: {{$announce_to_check->location}}</p>
                            <p class="card-text">Descrizione: {{$announce_to_check->description}}</p>
                            <p class="card-text">Categoria: {{$announce_to_check->category->name}}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 mt-custom1 d-flex justify-content-evenly">
                        <form action="{{route('revisor.acceptAnnounce', ['announce'=>$announce_to_check])}}" method="POST">
                            @csrf
                                @method('PATCH')
                                    <button type="submit" class="btn btn-customRevAcc">Accetta</button>
                        </form>

                        <form action="{{route('revisor.rejectAnnounce', ['announce'=>$announce_to_check])}}" method="POST">
                            @csrf
                                @method('PATCH')
                                    <button type="submit" class="btn btn-customRevDen">Rifiuta</button>
                        </form>
                    </div>
            </div>
                    
        </div>     
    @endif

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</x-layout>