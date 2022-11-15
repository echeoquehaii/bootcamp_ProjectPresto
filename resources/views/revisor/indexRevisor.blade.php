<x-layout>

    
    
    <h1 class="space text-center titles">{{$announce_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare'}} </h1>
    <div class="container-fluid">
        @if ($announce_to_check)
    
      
            <div class="row align-items-center mt-custom1">
                <div class="col-12 col-md-6">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @if(!$announce_to_check->images()->get()->isEmpty())
                                    @foreach($announce_to_check->images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{Storage::url($image->path)}}" class="img-fluid"/>
                                        </div>
                                    @endforeach
                                @else
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
                                @endif
                            </div>
                            
                        </div>
                </div>
                   
                    <div class="col-12 col-md-6">
                        <div class="cardRev">       
                            <div class="linesRev"></div>
                                <div class="contentRev">
                                    <div class="detText text-white">
                                        <p class="card-text"><span class="fontRev">Nome:</span> {{$announce_to_check->name}}</p>
                                        <p class="card-text"><span class="fontRev">Venditore:</span> {{$announce_to_check->user->name}}</p>
                                        <p class="card-text"><span class="fontRev">Prezzo:</span> {{$announce_to_check->price}} €</p>
                                        <p class="card-text"><span class="fontRev">Posizione:</span> {{$announce_to_check->location}}</p>
                                        <p class="card-text"><span class="fontRev">Categoria:</span> {{$announce_to_check->category->name}}</p>
                                        <p class="card-text"><span class="fontRev">Descrizione:</span> {{$announce_to_check->description}}</p>                                      
                                    </div>
                                </div>
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
    @endif

                
    </div>
</x-layout>