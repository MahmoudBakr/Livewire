<div class="col-lg-3">
    <select class="form-select" wire:model="branch" aria-label="Default select example">
        <option selected>Select Branch....</option>
        @foreach ($branches as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
        @endforeach
        
    </select>              
</div>
