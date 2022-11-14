<div>

    <div class="container-fluid mb-5 height space">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="formAnnounce my-5">       
                    <div class="lines"></div>
                    <div class="content">
                        <form wire:submit.prevent="storeAnnounce">

                            <h2 class="text-wh text-center mb-4">CREA IL TUO ANNUNCIO</h2>
        
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('name') is-invalid @enderror" wire:model.lazy='name'>
                                <label class="form-label">Nome Stella:</label>
                                <i></i>                                                         
                            </div>
                                <div class="text-white">
                                    @error('name') {{$message}} @enderror
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
                            </div>
                                <div class="text-white">
                                    @error('price') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('location') is-invalid @enderror" wire:model.lazy='location'>
                                <label class="form-label">Posizione:</label>
                                <i></i>   
                            </div>
                                <div class="text-white">    
                                    @error('location') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <p class="form-label text-white">Descrizione:</p>
                                <textarea wire:model.lazy='description' cols="30" rows="10" class="@error('description') is-invalid @enderror"></textarea>
                            </div>
                                <div class="text-white">
                                    @error('description') {{$message}} @enderror
                                </div>
                                
                            <div class="mb-3">
                                <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
                                @error('temporary_images.*') 
                                    <p class="text-danger mt-2">{{$message}}</p>
                                @enderror
                            </div>

                            @if (!empty($images))
                                <div class="row">
                                    <div class="col-12">
                                        <p>Anteprima foto</p>
                                        <div class="raw border border-4 border-info rounded shadow py-4">
                                            @foreach ($images as $key => $image)
                                            <div class="col my-3">
                                                <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}}); height:200px;"></div>
                                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif  

                            <button type="submit" class="btnLogForm">Carica l'annuncio</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
