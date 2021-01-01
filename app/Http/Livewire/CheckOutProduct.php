<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckOutProduct extends Component
{

    public $cities = [];

    public function render()
    {
        return view('livewire.check-out-product');
    }
}
