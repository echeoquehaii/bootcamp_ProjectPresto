<x-layout>
    
    <h1>Il dettaglio di {{$announce->name}}</h1>
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
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="card-title">Nome: {{$announce->name}}</h5>
                                <p class="card-text">Venditore: {{$announce->user->name}}</p>
                                <p class="card-text">Prezzo: {{$announce->price}} €</p>
                                <p class="card-text">Posizione: {{$announce->location}}</p>
                                <p class="card-text">Descrizione: {{$announce->description}}</p>
                                <p class="card-text">Categoria: {{$announce->category->name}}</p>
                            </div>
                            <img src="https://picsum.photos/200/300" class="d-block w-100" alt="...">
                            
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200/301" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200/302" class="d-block w-100" alt="...">
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
            </div>
        </div>
    </div>
    
    
</x-layout>