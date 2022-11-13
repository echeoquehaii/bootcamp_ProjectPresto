<x-layout>
    
    <h1 class="mt-custom text-center">Il dettaglio di {{$announce->name}}</h1>
    <div class="container height">
        <div class="row vh-100">
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
                    <h5 class="card-title">Nome: {{$announce->name}}</h5>
                    <p class="card-text">Venditore: {{$announce->user->name}}</p>
                    <p class="card-text">Prezzo: {{$announce->price}} €</p>
                    <p class="card-text">Posizione: {{$announce->location}}</p>
                    <p class="card-text">Descrizione: {{$announce->description}}</p>
                    <p class="card-text">Categoria: {{$announce->category->name}}</p>
                </div>

            </div>
        </div>
    </div>
    
    
</x-layout>