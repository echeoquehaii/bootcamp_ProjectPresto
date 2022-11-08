<div>
    
    <form wire:submit.prevent="createAnnounce">
        <div class="mb-3">
          <label class="form-label">Nome:</label>
          <input type="text" class="form-control" wire:model.lazy='name'>
        </div>
        <select wire:model.lazy='selCategory' id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label class="form-label">Prezzo:</label>
            <input type="numeric" class="form-control" wire:model.lazy='price'>
        </div>
        <div class="mb-3">
            <label class="form-label">Dove:</label>
            <input type="text" class="form-control" wire:model.lazy='location'>
        </div>
        <div class="mb-3">
            <p>Descrizione:</p>
            <textarea wire:model.lazy='description' cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>











</div>
