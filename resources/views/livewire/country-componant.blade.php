
<div class="col-lg-4">
    <select class="form-select" wire:model="country" aria-label="Default select example">
        <option selected>Select Country....</option>
        @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>
        @endforeach
        
    </select>              
</div>
