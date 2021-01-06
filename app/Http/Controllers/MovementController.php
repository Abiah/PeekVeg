<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovementController extends Controller
{
    public function index(Request $request){

        if (Auth::user()->user_type === "Farmer") {

        return redirect()->route('farmersdashboard');
    }

        return view('organisations.dashboard');
    }

    
    //farmers movement
    public function newFarm(){
        return view('farmers.add_farm');
    }

    public function newproduct(){
        $category = Category::all();
        $farmcode = Farm::where([
            ['farmer_code',Auth::user()->organisation_code]
            ])->get(['farm_code','farm_produce']);

        return view ('farmers.add_product')
        ->with("category",$category)
        ->with("farm_code",$farmcode);
      
    }


    //end of farmers task

   


}
