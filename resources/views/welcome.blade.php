<x-layout>
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
    
    

</x-layout>