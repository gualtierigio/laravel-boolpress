<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function movies(){
        return $this->hasMany('App\Models\Movies');
    }
}
