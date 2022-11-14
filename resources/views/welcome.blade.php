<x-layout>
    @vite(['resources/js/welcome.js'])

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
                    <h3 class="titles">A New Way to Own a Star!</h3>
                </div>
                <div class="col-12 col-md-4">
                    @auth
        
                    <a href="{{route('createAnnounce')}}"><button class=" btn btn-custom">Inserisci annuncio</button><i></i></a>
        
                    @endauth
                </div>
            </div>
        </div>

        <div class="container-fluid img-wel">
            <h2 class="text-center text-wh display-5">Stai cercando una stella?</h2>
            <h2 class="text-center text-wh display-5  mt-5">Trova sul nostro portale la tua preferita!</h2>

            <div class="row align-items-center row-height">
                <div class="col-12 col-md-6 text-wh">
                    <h3>Importa o trova la tua stella preferita!</h3>
                    <p>Sul nostro portale potrai inserire i tuoi annunci riguardati le tue stelle, <br> oppure trovare quella che più si adatta a te!
                    Inserisci il tuo annuncio in pochi semplici click e il gioco è fatto! <br>
                    oppure prova a cercare tra gli annunci la stella che più preferisci e falla diventare tua!</p>
                </div>
                <div class="col-12 col-md-6">

                    @guest
                    <h3 class="text-wh">Effettua l'accesso e prova le nostre funzionalità!</h3>
                    

                    <a href="{{route('login')}}"><button class=" btn btn-custom mt-5">Effettua l'accesso!</button><i></i></a>

                    @endguest
                    @auth
                    <h3 class="text-wh"> Guarda gli ultimi annunci presenti!</h3>

                    <a href="{{route('indexAnnounce')}}"><button class=" btn btn-custom mt-5">Guarda qui!</button><i></i></a>

                    @endauth



                </div>
            </div>
        </div>

{{--         <script type="text/javascript" src="{{ URL::asset('js/welcome.js') }}"></script>
 --}}
    </x-layout>