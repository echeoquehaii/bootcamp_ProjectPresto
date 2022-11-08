<x-layout>

    <h1>YO</h1>
@auth
    <div class="container">
        <a href="{{route('createAnnounce')}}"><button class="btn btn-warning">Inserisci annuncio</button></a>
    </div>
@endauth
    
    

</x-layout>