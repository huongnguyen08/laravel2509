<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = 'food_type';

    function Food(){
        //foreach()
        return $this->hasMany('App\Food','id_type','id');
    }
}
