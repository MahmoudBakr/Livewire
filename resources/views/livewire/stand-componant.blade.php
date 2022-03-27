<div class="col-lg-3">
    <select class="form-select" wire:model="stand" aria-label="Default select example">
        <option selected>Select Stand....</option>
        @foreach ($stands as $stand)
            <option value="{{ $stand->id }}">{{ $stand->name }}</option>
        @endforeach
        
    </select>              
</div>
