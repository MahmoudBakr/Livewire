<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\City;

class CityComponant extends Component
{
    public $cities=[];
    public $city;
    protected $listeners = ['displayCity' => 'display'];

    public function display($country_id){
        $this->cities = City::where('country_id', $country_id)->get();
        
    }

    public function render()
    {
        if(!empty($this->city)) {
            $this->emit('displayArea', $this->city);
        }
        return view('livewire.city-componant');
    }
}
