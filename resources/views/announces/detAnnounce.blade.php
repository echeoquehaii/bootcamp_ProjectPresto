<x-layout>
    
    <h1 class="mt-custom text-center">Il dettaglio di {{$announce->name}}</h1>
    <div class="container height">
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @if(!$announce->images()->get()->isEmpty())
                            @foreach($announce->images as $image)
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
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

                <div class="row mt-custom1">
                    <div class="col-12 col-md-6 d-flex justify-content-evenly">
                        <div class="cardDet">       
                        <div class="linesDet"></div>
                            <div class="contentDet">
                                <div class="detText text-white">
                                    <p class="card-text"><span class="fontRev">Nome:</span> {{$announce->name}}</p>
                                    <p class="card-text"><span class="fontRev">Venditore:</span> {{$announce->user->name}}</p>
                                    <p class="card-text"><span class="fontRev">Prezzo:</span> {{$announce->price}} €</p>
                                    <p class="card-text"><span class="fontRev">Posizione:</span> {{$announce->location}}</p>
                                    <p class="card-text"><span class="fontRev">Categoria:</span> {{$announce->category->name}}</p>
                                </div>                                                                                             
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 d-flex justify-content-evenly">
                        <div class="cardDet">       
                        <div class="linesDet"></div>
                            <div class="contentDet">
                                <div class="detText text-white">
                                   <p class="card-text"><span class="fontRev">Descrizione:</span> {{$announce->description}}</p>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
    
</x-layout>


