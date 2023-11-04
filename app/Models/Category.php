<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function sub_categories(){
        return $this->hasMany(Sub_categories::class);
    }

    public function Imgs (){
        return $this->morphMany(Img::class,'model' , 'model_type' , 'model_id' , 'id');
    }
}
