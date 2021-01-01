<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'farm_type','farm_produce','max_produce','min_produce','farm_code','farmer_code',
    ];

    public function users(){

        return $this->belongsTo(User::class,'famer_code');
    }

    public function products(){

        return $this->belongsTo(Product::class);
    }
}
