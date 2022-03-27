<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Branch;

class BranchComponant extends Component
{
    public $branches=[];
    public $branch;
    public $area_id;

    protected $listeners = ['displayBranch' => 'display', 'branchArea' => 'area'];

    public function area($area_id){
        $this->area_id = $area_id;
    }
    public function display($brand_id){
        if(!empty($this->area_id)){
            $this->branches = Branch::where('brand_id', $brand_id)->where('area_id', $this->area_id)->get();
        }else{
            $this->branches = [];
        }
    }

    public function render()
    {
        if(!empty($this->branch)) {
            $this->emit('displayStand', $this->branch);
        }
        return view('livewire.branch-componant');
    }
}
