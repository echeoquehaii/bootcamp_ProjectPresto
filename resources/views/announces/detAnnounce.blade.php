<x-layout>
    
    <h1 class="mt-custom text-center">Il dettaglio di {{$announce->name}}</h1>
    <div class="container height">
        <div class="row vh-100">
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

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="text-center mt-5 detText glass">
                            <h3 class="card-title">Nome: {{$announce->name}}</h5>
                            <p class="card-text fs-4">Venditore: {{$announce->user->name}}</p>
                            <p class="card-text fs-4">Prezzo: {{$announce->price}} €</p>
                            <p class="card-text fs-4">Posizione: {{$announce->location}}</p>
                            <p class="card-text fs-4">Categoria: {{$announce->category->name}}</p>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="text-center mt-5 detText glass">
                            <p class="card-text fs-4">Descrizione: {{$announce->description}}</p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
</x-layout>