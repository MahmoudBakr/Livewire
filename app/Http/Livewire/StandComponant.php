<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stand;

class StandComponant extends Component
{
    public $stands=[];
    public $stand;

    protected $listeners = ['displayStand' => 'display'];

    public function display($branch_id){
        
        $this->stands = Stand::where('branch_id', $branch_id)->get();
        
        
        
    }

    public function render()
    {
        return view('livewire.stand-componant');
    }
}
