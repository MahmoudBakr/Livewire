<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;


class CountryComponant extends Component
{
    public $country;
    
    public $city;

    public function render()
    {
        if(!empty($this->country)) {
            $this->emit('displayCity', $this->country);
        }
        
        $countries = Country::all();
        return view('livewire.country-componant')->with([
            'countries'  => $countries
        ]);
    }
}
