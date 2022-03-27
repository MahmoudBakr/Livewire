<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class CompanyComponant extends Component
{
    public $company;
    public function render()
    {
        if(!empty($this->company)) {
            $this->emit('displayBrand', $this->company);
        }

        $companies = Company::all();

        return view('livewire.company-componant')->with([
            'companies'  => $companies
        ]);
    }
}
