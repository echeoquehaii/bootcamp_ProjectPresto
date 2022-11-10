<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container mt-5">
        <div class="row">
            <div class="col-9">
                <form wire:submit.prevent="storeAnnounce">
        
                    <div class="mb-3">
                      <label class="form-label">Nome:</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy='name'>
                      <div class="text-white">
                        @error('name') {{$message}} @enderror
                      </div>
                    </div>
            
                    <select class="@error('category') is-invalid @enderror" wire:model.defer="category" id="">
                        <option value="">Scegli una categoria</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div class="text-white">
                        @error('category') {{$message}} @enderror
                    </div>
            
                    <div class="mb-3">
                            <label class="form-label">Prezzo:</label>
                            <input type="numeric" class="form-control @error('price') is-invalid @enderror" wire:model.lazy='price'>
                            <div class="text-white">
                                @error('price') {{$message}} @enderror
                            </div>
                    </div>
            
                    <div class="mb-3">
                        <label class="form-label">Dove:</label>
                        
                            <input type="text" class="form-control @error('location') is-invalid @enderror" wire:model.lazy='location'>
                            <div class="text-white">    
                                @error('location') {{$message}} @enderror
                            </div>
                    </div>
            
                    <div class="mb-3">
                        <p class="form-label">Descrizione:</p>
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
            
                    <button type="submit" class="btn btn-primary">Carica l'annuncio</button>
                </form>    

            </div>
        </div>
    </div>
</div>
