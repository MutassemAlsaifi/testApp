<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function orders (){
    return $this->belongsToMany(Customer::class)->withPivot('price');
    }

    public function Img (){
        return $this->morphOne(Img::class,'model' , 'model_type' , 'model_id' , 'id');
    }
}
