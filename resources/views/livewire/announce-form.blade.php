<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container mb-5 height space">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="formAnnounce">       
                    <div class="lines"></div>
                    <div class="content">
                        <form wire:submit.prevent="storeAnnounce">

                            <h2 class="text-wh text-center mb-4">CREA IL TUO ANNUNCIO</h2>
        
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('name') is-invalid @enderror" wire:model.lazy='name'>
                                <label class="form-label">Nome Stella:</label>
                                <i></i>                             
                              <div class="text-white">
                                @error('name') {{$message}} @enderror
                              </div>
                            </div>
                    
                            <select class="@error('category') is-invalid @enderror btnLogDrop" wire:model.defer="category" id="">
                                <option value="">Scegli una categoria</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <div class="text-white">
                                @error('category') {{$message}} @enderror
                            </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="numeric" class="@error('price') is-invalid @enderror" wire:model.lazy='price'>
                                <label class="form-label">Prezzo:</label>
                                <i></i>                                    
                                    <div class="text-white">
                                        @error('price') {{$message}} @enderror
                                    </div>
                            </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('location') is-invalid @enderror" wire:model.lazy='location'>
                                <label class="form-label">Posizione:</label>
                                <i></i>   
                                    <div class="text-white">    
                                        @error('location') {{$message}} @enderror
                                    </div>
                            </div>
                    
                            <div class="mb-3 inputBox">
                                <p class="form-label text-white">Descrizione:</p>
                                <textarea wire:model.lazy='description' cols="30" rows="10" class="@error('description') is-invalid @enderror"></textarea>
                                <div class="text-white">
                                    @error('description') {{$message}} @enderror
                                </div>
                            </div>
                    
                            {{-- <form>
                                <div class="form-group">
                                  <label for="exampleFormControlFile1">Scegli l'immagine!</label>
                                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form> --}}
                    
                            <button type="submit" class="btnLogForm">Carica l'annuncio</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3"></div>
        </div>
    </div>
</div>
