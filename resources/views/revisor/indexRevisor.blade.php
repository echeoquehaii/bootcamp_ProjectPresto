<x-layout>

    
    
    <h1 class="space text-center titles">{{$announce_to_check ? trans('ui.revisioneSi') : trans('ui.revisioneNo')}} </h1>
    <div class="container-fluid">
        @if ($announce_to_check)
    
      
            <div class="row align-items-center mt-custom1">
                <div class="col-12 col-md-6">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @if(!$announce_to_check->images()->get()->isEmpty())
                                    @foreach($announce_to_check->images as $image)
                                        <div class="swiper-slide">
                                            {{-- <img src="{{Storage::url($image->path)}}" class="img-fluid"/> --}}
                                            
                                            {{--DA MIGLIORARE LO STILE DI QUESTA SEZIONE--}}


                                            <img src="{{$image->getUrl(400,300)}}" class="img-fluid p-3 rounded" alt="">
                                        </div>
                                        <div class="col-md-3 border-end">
                                            <h5 class="tc-accent mt-3">Tags</h5>
                                            <div class="p-2">
                                                @if ($image->labels)
                                                  @foreach ($image->labels as $label)
                                                    <p class="d-inline">{{$label}}</p>
                                                  @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-body">
                                                <h5 class="tc-accent">Revisione Immagini</h5>
                                                    <p>Adulti: <span class="{{$image->adult}}"></span></p>
                                                    <p>Satira: <span class="{{$image->spoof}}"></span></p>
                                                    <p>Medicina: <span class="{{$image->medical}}"></span></p>
                                                    <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                                    <p>Contenuto Spicy: <span class="{{$image->racy}}"></span></p>
                                            </div>
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
                                        <p class="card-text"><span class="fontRev">{{__('ui.nome')}}</span> {{$announce_to_check->name}}</p>
                                        <p class="card-text"><span class="fontRev">{{__('ui.venditore')}}</span> {{$announce_to_check->user->name}}</p>
                                        <p class="card-text"><span class="fontRev">{{__('ui.prezzo')}}</span> {{$announce_to_check->price}} €</p>
                                        <p class="card-text"><span class="fontRev">{{__('ui.posizione')}}</span> {{$announce_to_check->location}}</p>
                                        <p class="card-text"><span class="fontRev">{{__('ui.categoria')}}</span> {{$announce_to_check->category->name}}</p>
                                        <p class="card-text"><span class="fontRev">{{__('ui.descrizione')}}</span> {{$announce_to_check->description}}</p>                                      
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 mt-custom1 d-flex justify-content-evenly">
                        <form action="{{route('revisor.acceptAnnounce', ['announce'=>$announce_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                                <button type="submit" class="btn btn-customRevAcc fonty">{{__('ui.accetta')}}</button>
                        </form>

                        <form action="{{route('revisor.rejectAnnounce', ['announce'=>$announce_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                                <button type="submit" class="btn btn-customRevDen fonty">{{__('ui.rifiuta')}}</button>
                        </form>
                    </div>                  
            </div>     
    @endif

                
    </div>
</x-layout>