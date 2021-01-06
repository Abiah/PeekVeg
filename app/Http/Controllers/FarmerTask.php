<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmerTask extends Controller
{
    public function add_farm(Request $request){
        $this->validate($request,[
            'farmtype' =>'required|string',
            'farm_produce' =>'required|string',
            'min_produce' =>'required|integer',
            'max_produce' =>'required|integer',
            'farm_location'=>'required|string',
           ]);

        if ($request->isMethod('post')) {
            
            $farms = new Farm;

            $farms->farm_code  = rand();
            $farms->farm_type  = $request->farmtype;
            $farms->farm_produce  = $request->farm_produce;
            $farms->min_produce  = $request->min_produce;
            $farms->max_produce  = $request->max_produce;
            $farms->farmer_code  = Auth::user()->organisation_code;
            $farms->farm_location = $request->farm_location;
            
            if (Farm::where([
                ['farm_produce', $request->farm_produce],
                ['farmer_code', Auth::user()->organisation_code],
                ])->exists()) {

                return redirect()->route('newfarm')->with('error',"Farm Already exists");

             }else{

               if (is_numeric($request->farm_produce)) {
                return redirect()->route('newfarm')->with('error',"Farm produce can not be a number ");
               }

               else{$farms->save();
                return redirect()->route('newfarm')->with('farmcode',$farms->farm_code);
            }


               
             }
        }
    }


    public function add_product(Request $request){
        $this->validate($request,[
            'productname' => 'required|string',
            'productprice' =>'required|integer',
            'productcategory' =>'required|integer',
            'farmcode' =>'required|integer',
            'productstock' =>'required|integer',
            'description' =>'required|string',
           ]);
    
           if ($request->isMethod('post')) {
    
            $product = new Product;
    
            $product->product_name =  $request->productname;
            $product->product_id = rand();
            $product->price = $request->productprice;
            $product->category = $request->productcategory;
            $product->farms_code = $request->farmcode;
            $product->farmer_code = Auth::user()->organisation_code;
            $product->stock = $request->productstock;
            $product->description = $request->description;
    
            $farmlocation = Farm::where([
                ["farmer_code", Auth::user()->organisation_code],
                ['farm_code',$request->farmcode],
            ])->first();
            
            $product->location = $farmlocation->farm_location;
    
           if($request->farmcode === " "){
            return redirect()->back()->with("added","farm is empty");
           }
           else{
            $product->save();
            return redirect()->route('newproduct')->with("added","Product Added Successfully");
           }
    
         }
    }
}
