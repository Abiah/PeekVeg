<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class OrganDashbord extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.organ-dashbord',[
            "recent" => Order::where('organisation_code',Auth::user()->organisation_code)->simplePaginate(6),
        ]);
    }
}
