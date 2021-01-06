<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;



class LiveProducts extends Component
{

    use WithPagination;

    public $count = 300;
    public $search = '';


    public function add_item($itemid){

        $carts = Product::find($itemid);

        Cart::add(['id' => $itemid, 'name' => $carts->product_name, 'qty' => 1, 'price' => $carts->price, 
        'weight' => 1, 'options'=>['product_id' => $itemid,'farm_code' => $carts->farms_code,
        'farmer_code' => $carts->farmer_code]])->associate(\App\Models\Product::class);
    }

    public function remove_item($rowId){
       
        Cart::remove($rowId);
    }

    public function render()
    {
        return view('livewire.live-products',[
            "all_product" => Product::search($this->search)->simplePaginate(),
        ]);
    }
}
