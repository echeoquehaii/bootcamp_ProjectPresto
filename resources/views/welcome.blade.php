<x-layout>
    @vite(['resources/js/welcome.js'])

    {{-- <div id="preloader"></div> --}}

    <div id="bubble" class="navbar navbar-expand-lg fixed-top bg-transparent">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:28;"></span>
    </div>     

        <div class="container-fluid bg-main vh-100 welcome-padding">
            <div class="row align-items-center row-height">
                <div class="col-12 col-md-8 text-wh">
                    <h1 class="display-1 titles">P R E S T O</h1>
                    <h3 class="titles">A NEW WAY TO OWN A STAR!</h3>
                </div>
                <div class="col-12 col-md-4">
                    @auth
        
                    <a href="{{route('createAnnounce')}}"><button class=" btn btn-custom fonty">{{__('ui.createAnnounce')}}</button><i></i></a>
        
                    @endauth
                </div>
            </div>
        </div>

         <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 p-0">
                    <div class="swiper1 mySwiper1">
                        <div class="swiper-wrapper">
                            @forelse ($announces as $announce)
                                <div class="swiper-slide swiper-slide1 imgBx pb-0">
                                    <img src="{{!$announce->images()->get()->isEmpty() ? $announce->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200/300'}}" alt="" class="imageBx pb-0">
                                </div>
                                @empty
                                <div class="swiper-slide swiper-slide1 imgBx pb-0">
                                    <img src='https://picsum.photos/200/300' alt="" class="imageBx pb-0">
                                </div>
                            @endforelse 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container-fluid img-wel px-5">
            <h2 class="text-center text-wh display-5 pt-5">{{__('ui.welcome1')}}</h2>
            <h2 class="text-center text-wh display-5  mt-5">{{__('ui.welcome2')}}</h2>

            <div class="row align-items-center row-height-wel3">
                <div class="col-12 col-md-6 text-wh">
                    <h3>{{__('ui.welcome3')}}</h3>
                    <p>{{__('ui.welcome4')}}</p>
                </div>
                <div class="col-12 col-md-6 mt-1">

                    @guest
                    <h3 class="text-wh">{{__('ui.welcome5')}}</h3>
                    

                    <a href="{{route('login')}}"><button class=" btn btn-custom mt-1 fonty" data-aos="fade-left" data-aos-duration="2000">{{__('ui.welcome6')}}</button><i data-aos="fade-left" data-aos-duration="2000"></i></a>

                    @endguest
                    @auth
                    <h3 class="text-wh">{{__('ui.welcome7')}}</h3>

                    <a href="{{route('indexAnnounce')}}"><button class=" btn btn-custom mt-1 fonty" data-aos="fade-left" data-aos-duration="2000">{{__('ui.welcome8')}}</button><i data-aos="fade-left" data-aos-duration="2000"></i></a>

                    @endauth



                </div>
            </div>
        </div>
{{--         <script type="text/javascript" src="{{ URL::asset('js/welcome.js') }}"></script>
 --}}
    </x-layout>