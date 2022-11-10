<x-layout>

    
    <h1 class="text-center mt-custom">Ecco la tua categoria stellare: {{$category->name}}</h1>

    
    <div class="container">
        <div class="row">
            @forelse ($category->announces as $announce)
               <div class="card0">
            <div class="lines"></div>
            <div class="imgBx">
                <img src="https://picsum.photos/200/300" alt="" class="imageBx">
            </div>
            <div class="content">
                <div class="details">
                    <h2>{{$announce->name}}</h2>
                    <div class="data">
                        <h3>{{$announce->user->name}}</h3>
                        <h3>{{$announce->category->name}}</h3>
                    </div>
                    <div class="actionBtn">
                        <a href="{{route('detAnnounce', compact('announce'))}}"><button>Vai al dettaglio</button></a>
                    </div>
                </div>

            </div>
            
         </div> 
            @empty
                <p>Non ci sono oggetti di questa categoria!</p>
            @auth
             <div class="container">
                 <a href="{{route('createAnnounce')}}"><button class="btn btn-warning">Inserisci annuncio</button></a>
             </div>
            @endauth 
        @endforelse
        
         </div>

         
    </div>     


</x-layout>