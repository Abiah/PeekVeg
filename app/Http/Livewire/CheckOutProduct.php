<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\CartItem;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckOutProduct extends Component
{

    public $cities = [];

    public $quantity;

    protected $rules = [
        'quantity' => 'required|integer',
        
    ];

    public function update($rowId){

        $this->validate();

        if ($this->quantity === '') {
            
        }
        else{

        Cart::update($rowId, $this->quantity);
        }
    }

    public function orderProduct(){

       if (Cart::content()->count() > 0) {
        foreach (Cart::content() as $value) {

            $orders = new Order();

            $purid = rand();

            $orders->purchase_id = $purid;
            $orders->organisation_code = Auth::user()->organisation_code ;
            $orders->purchase_date =now();
            $orders->product_id = $value->model->product_id ;
            $orders->quanitity = $value->qty;
            $orders->farm_code  = $value->model->farms_code;
            $orders->farmer_code = $value->model->farmer_code;
            $orders->status = 'order accepted';

            $orders->save();

            session()->flash('orders','Order made successfully');

            Cart::store(Auth::user()->organisation_code);

            Cart::destroy();

        }
       }
    }

    public function render()
    {
        return view('livewire.check-out-product');
    }
}
