<div class="col-lg-3">
    <select class="form-select" wire:model="company" aria-label="Default select example">
        <option selected>Select Company....</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
        
    </select>              
</div>
