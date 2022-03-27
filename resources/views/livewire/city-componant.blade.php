<div class="col-lg-4">
    <select class="form-select" wire:model="city" aria-label="Default select example">
        <option selected>Select City....</option>
        @foreach($cities as $city)
            <option value={{ $city->id }}>{{ $city->name }}</option>
        @endforeach
    </select>
</div>
