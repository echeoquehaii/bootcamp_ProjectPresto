<div>

    <div class="container-fluid mb-5 height space">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="formAnnounce d-flex">       
                    <div class="lines"></div>
                    <div class="content d-flex justify-content-center">
                        <form wire:submit.prevent="storeAnnounce" class="d-flex flex-column align-items-center">

                            <h2 class="text-wh text-center mb-4 mt-5 titles announceTitle">{{__('ui.creaAnnunc')}}</h2>
        
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('name') is-invalid @enderror" wire:model.lazy='name'>
                                <label class="form-label">{{__('ui.nomeStella')}}</label>
                                <i></i>                                                         
                            </div>
                                <div class="text-white annError">
                                    @error('name') {{$message}} @enderror
                                </div>
                    
                            <select class="@error('category') is-invalid @enderror btnLogDrop" wire:model.defer="category" id="">
                                <option value="">{{__('ui.sceltaCategoria')}}</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"><x-categoriesLocale :category="$category"/></option>
                                @endforeach
                            </select>
                                <div class="text-white annError">
                                    @error('category') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="numeric" class="@error('price') is-invalid @enderror" wire:model.lazy='price'>
                                <label class="form-label">{{__('ui.prezzo')}}</label>
                                <i></i>                                                                       
                            </div>
                                <div class="text-white annError">
                                    @error('price') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox">
                                <input required="required" type="text" class="@error('location') is-invalid @enderror" wire:model.lazy='location'>
                                <label class="form-label">{{__('ui.posizione')}}</label>
                                <i></i>   
                            </div>
                                <div class="text-white annError">    
                                    @error('location') {{$message}} @enderror
                                </div>
                    
                            <div class="mb-3 inputBox d-flex flex-column justify-content-center">
                                <p class="form-label text-white">{{__('ui.descrizione')}}</p>
                                <textarea wire:model.lazy='description' cols="27" rows="10" class="@error('description') is-invalid @enderror"></textarea>
                                <div class="text-white textbox annError">
                                    @error('description') {{$message}} @enderror
                                </div>
                            </div>
                            
                                <div class="mb-3 imgLoader d-flex flex-column justify-content-center">
                                    <div class="my-3 imgLoaderBtn">
                                        <input wire:model="temporary_images" type="file" name="images" multiple class="imgLoaderButton form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
                                        @error('temporary_images.*') 
                                            <p class="text-danger mt-2 annError">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 imgLoader d-flex flex-column justify-content-center">
                                        @if (!empty($images))
                                            <p class="text-white text-center mb-0 mt-2">{{__('ui.anteprimaFoto')}}</p>
                                                @foreach ($images as $key => $image)
                                                    <div class="imgLoader mt-2 d-flex flex-column justify-content-center" style="background-image: url({{$image->temporaryUrl()}}); height:200px;"></div>
                                                    <button type="button" class="btnLogImg d-block text-center text-white mt-4 mb-3 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.cancella')}}</button>
                                                @endforeach
                                        @endif 
                                    </div>
                                </div>

                            <button type="submit" class="btnLogForm">{{__('ui.caricaAnnuncio')}}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
