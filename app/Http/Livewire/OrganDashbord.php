<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
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
            "recent" => OrderDetail::where('user_code',Auth::user()->organisation_code)->orderBy('created_at','desc')->simplePaginate(6),
        ]);
    }
}
