<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'name', 
        'slug'
    ];

    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
