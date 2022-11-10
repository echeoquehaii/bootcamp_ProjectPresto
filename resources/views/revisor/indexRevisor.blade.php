<x-layout>

    
    
    <h1>{{$announce_to_check ? 'Ecco l annuncio da revisionare' : 'Non ci sono annunci da revisionare'}} </h1>
    
    @if ($announce_to_check)
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="img-container">
                                    <img src="https://picsum.photos/2000/320" class="d-block w-100 " alt="...">
                                </div>
                                
                            </div>
                            <div class="carousel-item">
                                <div class="img-container">
                                    <img src="https://picsum.photos/2000/301" class="d-block w-100 " alt="...">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-container">
                                    <img src="https://picsum.photos/2000/300" class="d-block w-100 " alt="...">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="text-center mt-5 detText">
                        <h5 class="card-title">Nome: {{$announce_to_check->name}}</h5>
                        <p class="card-text">Venditore: {{$announce_to_check->user->name}}</p>
                        <p class="card-text">Prezzo: {{$announce_to_check->price}} €</p>
                        <p class="card-text">Posizione: {{$announce_to_check->location}}</p>
                        <p class="card-text">Descrizione: {{$announce_to_check->description}}</p>
                        <p class="card-text">Categoria: {{$announce_to_check->category->name}}</p>
                    </div>
                   
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.acceptAnnounce', ['announce'=>$announce_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                      <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 text-end">
                    <form action="{{route('revisor.rejectAnnounce', ['announce'=>$announce_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                      <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</x-layout>