<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['title', 'description', 'director', 'category_id'];

    public function category(){
        $this->belongsTo('App\Models\Category');
    }
}
