<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = ['title', 'description', 'director', 'img_url', 'category_id'];

    public function category(){
        $this->belongsTo('App\Models\Category');
    }

    public function actors(){
        $this->belongsToMany('App\Models\Actor');
    }
}
