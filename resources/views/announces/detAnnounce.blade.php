<x-layout>
    
    <h1 class="mt-custom text-center">{{__('ui.dettaglioDi')}} {{$announce->name}}</h1>
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
                            <h3 class="card-title">{{__('ui.nome')}} {{$announce->name}}</h5>
                            <p class="card-text fs-4">{{__('ui.venditore')}} {{$announce->user->name}}</p>
                            <p class="card-text fs-4">{{__('ui.prezzo')}} {{$announce->price}} €</p>
                            <p class="card-text fs-4">{{__('ui.posizione')}} {{$announce->location}}</p>
                            <p class="card-text fs-4">{{__('ui.categoria')}} {{$announce->category->name}}</p>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="text-center mt-5 detText glass">
                            <p class="card-text fs-4">{{__('ui.descrizione')}} {{$announce->description}}</p>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    
    
</x-layout>