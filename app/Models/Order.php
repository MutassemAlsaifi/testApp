<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function subCategories(){
            return $this->belongsTo(Sub_category::class);
    }
    public function imge(){
        return $this->hasOne(Imges::class);
    }
    public function customers (){
        return $this->belongsToMany(Order::class)->withPivot('price');
        }
}
