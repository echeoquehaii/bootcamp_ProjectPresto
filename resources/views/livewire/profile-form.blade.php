<div>
    <div class="container-fluid mb-5 height space">
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6 justify-content-center d-flex">
                <div class="formRegister my-5">       
                    <div class="lines"></div>
                    <div class="content">                       
                            
                        <form wire:submit.prevent="storeProfile">
    
                                <h2 class="text-wh text-center mb-4">Lavora con Noi!</h2>
                        
                                <div class="mb-3 inputBox">
                                    <input required="required" type="numeric" class="@error('age') is-invalid @enderror" wire:model.lazy="age">
                                    <label class="form-label">Età</label>
                                    <i></i>
                                </div>
                                <div class="text-white">
                                    @error('age'){{ $message }} @enderror
                                </div>

                                <div class="mb-3 inputBox">
                                    <input required="required" type="text" class="@error('address') is-invalid @enderror" wire:model.lazy="address">
                                    <label class="form-label">Indirizzo</label>
                                    <i></i>
                                </div>
                                <div class="text-white">
                                    @error('address'){{ $message }} @enderror
                                </div>
                                <div class="mb-3 inputBox">
                                    <input required="required" type="text" class="@error('description') is-invalid @enderror" wire:model.lazy="description">
                                    <label class="form-label">Descrizione</label>
                                    <i></i>
                                </div>
                                <div class="text-wh">
                                    @error('description'){{ $message }} @enderror
                                </div>
                            
                                <button type="submit" class="btnLogForm">Diventa revisore!</button>
                            </form>
                    </div>                       
                </div>
            </div>
            <div class="col-12 col-md-3"></div>
        </div>
    </div>

</div>
