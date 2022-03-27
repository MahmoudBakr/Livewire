<div class="col-lg-4">
    <select class="form-select" wire:model="area" aria-label="Default select example">
        <option selected>Select Area....</option>
        @foreach ($areas as $area)
            <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
    </select>
</div>
