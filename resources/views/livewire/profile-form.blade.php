<div>
    <div class="container vh-100 mt-custom1">
        <div class="row vh-100 justify-content-center text-center align-items-center">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="formRegister">       
                    <div class="lines"></div>
                    <div class="content">                       
                            
                        <form wire:submit.prevent="storeProfile">
    
                                <h2 class="text-wh text-center mb-4">Inserisci le tue informazioni per diventare revisore</h2>
                        
                                <div class="mb-4 inputBox">
                                    <input type="numeric" class="@error('age') is-invalid @enderror" wire:model.lazy="age">
                                    <label class="form-label">Età</label>
                                    <i></i>
                                </div>
                                @error('age') <div class="error text-wh">{{ $message }}</div> @enderror

                                <div class="mb-2 inputBox">
                                    <input type="text" class="@error('address') is-invalid @enderror" wire:model.lazy="address">
                                    <label class="form-label">Indirizzo</label>
                                    <i></i>
                                </div>
                                @error('address') <div class="error text-wh">{{ $message }}</div> @enderror

                                <div class="mb-2 inputBox">
                                    <input type="text" class="@error('description') is-invalid @enderror" wire:model.lazy="description">
                                    <label class="form-label">Descrizione</label>
                                    <i></i>
                                </div>
                                @error('description') <div class="error text-wh">{{ $message }}</div> @enderror
                            
                                <button type="submit" class="btnLogForm">Diventa revisore!</button>
                            </form>
                    </div>                       
                </div>
            </div>
            <div class="col-12 col-md-3"></div>
        </div>
    </div>

</div>
