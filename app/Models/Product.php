<?php

namespace App\Models;

use App\Models\Farm;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'description',
        'stock',
        'location',
    ];


    public static function search($search){

        return empty($search) ? static::query() : static::query()->where('product_name','like','%'.$search.'%')                                                                                     
                                                                ->orWhere('location','like','%'.$search.'%');
    }
    
    public function categories(){

        return $this->belongsTo(Category::class);
    }

    public function farms(){

        return $this->hasOne(Farm::class,'farm_code','farms_code');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
