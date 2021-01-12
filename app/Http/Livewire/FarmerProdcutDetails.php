<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FarmerProdcutDetails extends Component
{
    public $price;
    public $location;
    public $stock;
    public $description;

    public function updated(){
     dd($this->price);
    }

    public function render()
    {
        return view('livewire.farmer-prodcut-details',
        ['idss'=>"sadf"]);
    }
}
