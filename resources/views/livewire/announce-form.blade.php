<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    <form wire:submit.prevent="createAnnounce">
        
        <div class="mb-3">
          <label class="form-label">Nome:</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.lazy='name'>
          @error('name') {{$message}} @enderror
        </div>

        <select wire:model.defer="category" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label class="form-label">Prezzo:</label>
            <input type="numeric" class="form-control @error('price') is-invalid @enderror" wire:model.lazy='price'>
            @error('price') {{$message}} @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Dove:</label>
            <input type="text" class="form-control @error('location') is-invalid @enderror" wire:model.lazy='location'>
            @error('location') {{$message}} @enderror
        </div>

        <div class="mb-3">
            <p>Descrizione:</p>
            <textarea wire:model.lazy='description' cols="30" rows="10" class="@error('description') is-invalid @enderror"></textarea>
            @error('description') {{$message}} @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
