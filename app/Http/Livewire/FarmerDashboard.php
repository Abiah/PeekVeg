<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FarmerDashboard extends Component
{

    public function render()
    {
        return view('livewire.farmer-dashboard',[
           "all_product" =>  Product::where('farmer_code',Auth::user()->organisation_code)->paginate(25),
        ]);
    }
}
