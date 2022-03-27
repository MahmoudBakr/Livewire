<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;

class BrandComponant extends Component
{
    public $brands=[];
    public $brand;
    protected $listeners = ['displayBrand' => 'display'];

    public function display($company_id){
        $this->brands = Brand::where('company_id', $company_id)->get();
        
    }

    public function render()
    {
        if(!empty($this->brand)) {
            $this->emit('displayBranch', $this->brand);
        }
        return view('livewire.brand-componant');
    }
}
