<x-layout>

    @if (session('access.denied'))
        <div class="alert alert-success mt-5">
            {{ session('access.denied')}}
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success mt-5">
            {{ session('message') }}
        </div>
    @endif
    
    <div class="container-fluid mt-custom bg-main vh-100">
        <div class="row align-items-center row-height">
            <div class="col-12 col-md-8 text-wh">
                <h1 class="display-2">P R E S T O</h1>
                <h3>A New Way to Own a Star!</h3>
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
</x-layout>