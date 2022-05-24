<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_id',
        'type', 
        'description'
    ];

    public $timestamps = false;

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
