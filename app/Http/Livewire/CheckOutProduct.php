<?php

namespace App\Http\Livewire;

use App\Models\AcceptedCity;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Gloudemans\Shoppingcart\CartItem;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckOutProduct extends Component
{

    public $cities = [];

    public $quantity;
    
    public $delivery_method;
    public $delivery_cities;
    public $when_date;
    public $delivery_address;

    

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

            try {
                $orders = new OrderDetail();

            $purid = rand();

            $orders->purchase_id = $purid;
            $orders->user_code = Auth::user()->organisation_code ;
            $orders->purchase_date =now();
            $orders->productIds= $value->model->product_id ;
            $orders->quanitity = $value->qty;
            $orders->farming_code  = $value->model->farms_code;
            $orders->farmer_code = $value->model->farmer_code;
            $orders->status = 'order accepted';

            if ($this->delivery_method = " ") {
                $orders->delivery_method = "Direct cash delivery";
            }
            else{
                $orders->delivery_method = $this->delivery_method;
            }

            
           if ($this->delivery_cities === '--' ||  is_null($this->delivery_cities)) {
                $orders->delivery_add_code = Auth::user()->location ;
           }
           else{
            $orders->delivery_add_code = $this->delivery_cities;
           }
            $orders->delivery_address = $this->delivery_address;
            $orders->when_needed = $this->when_date;

      

            $orders->save();

            session()->flash('orders','Order made successfully');

            Cart::store(Auth::user()->organisation_code.'/'.now()->day());

            Cart::destroy();
            } catch (\Exception $th) {
                throw $th;
            }

        }
       }

    }

    public function render()
    {
        return view('livewire.check-out-product',[
            "city" => AcceptedCity::all(),
        ]);
    }
}
