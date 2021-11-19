<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function movies(){
        $this->belongsToMany('App\Models\Movies');
    }
}
