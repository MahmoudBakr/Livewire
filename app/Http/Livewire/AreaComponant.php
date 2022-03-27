<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Area;

class AreaComponant extends Component
{
    public $areas=[];
    public $area;
    protected $listeners = ['displayArea' => 'display'];

    public function display($city_id){
        $this->areas = Area::where('city_id', $city_id)->get();
    }

    public function render()
    {
        if(!empty($this->area)){
            $this->emit('branchArea', $this->area);
        }
        return view('livewire.area-componant');
    }
}
