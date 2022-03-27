<div class="col-lg-3">
    <select class="form-select" wire:model="brand" aria-label="Default select example">
        <option selected>Select Brand....</option>
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
        
    </select>              
</div>
