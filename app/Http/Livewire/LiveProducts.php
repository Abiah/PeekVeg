<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class LiveProducts extends Component
{

    use WithPagination;

    public $count = 300;
    public $search = ''; 
   
    public function render()
    {

        return view('livewire.live-products',[
            "all_product" => Product::search($this->search)->simplePaginate(),
        ]);
    }
}
