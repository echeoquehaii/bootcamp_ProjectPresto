<div>

    <div class="container-fluid mb-5 height space">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="formAnnounce my-5 ">       
                    <div class="lines"></div>
                    <div class="content">
                        <form wire:submit.prevent="storeAnnounce">

                            <h2 class="text-wh text-center mb-4">{{__('ui.creaAnnunc')}}</h2>
        
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('name') is-invalid @enderror" wire:model.lazy='name'>
                                <label class="form-label">{{__('ui.nomeStella')}}</label>
                                <i></i>                                                         
                            </div>
                                <div class="text-white">
                                    @error('name') {{$message}} @enderror
                                </div>
                    
                            <select class="@error('category') is-invalid @enderror btnLogDrop" wire:model.defer="category" id="">
                                <option value="">{{__('ui.sceltaCategoria')}}</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"><x-categoriesLocale :category="$category"/></option>
                                @endforeach
                            </select>
                                <div class="text-white">
                                    @error('category') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="numeric" class="@error('price') is-invalid @enderror" wire:model.lazy='price'>
                                <label class="form-label">{{__('ui.prezzo')}}</label>
                                <i></i>                                                                       
                            </div>
                                <div class="text-white">
                                    @error('price') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('location') is-invalid @enderror" wire:model.lazy='location'>
                                <label class="form-label">{{__('ui.posizione')}}</label>
                                <i></i>   
                            </div>
                                <div class="text-white">    
                                    @error('location') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <p class="form-label text-white">{{__('ui.descrizione')}}</p>
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
                                <div class="row align-item-center">
                                    <div class="col-12 col-md-12">
                                        <p class="text-white text-center">{{__('ui.anteprimaFoto')}}</p>
                                    </div>
                                    <div class="col-12 col-md-12">    
                                            @foreach ($images as $key => $image)
                                            
                                                <div class="loadImg mt-customImg" style="background-image: url({{$image->temporaryUrl()}}); height:200px;"></div>

                                                <button type="button" class="btnLogImg d-block text-center text-white mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.cancella')}}</button>
                                            
                                            @endforeach
                                    </div>    
                                    
                                </div>
                            @endif  

                            <button type="submit" class="btnLogForm">{{__('ui.caricaAnnuncio')}}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
