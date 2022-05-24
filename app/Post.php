<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
     public function getRouteKeyName()
 {
     return 'slug';
 }

    protected $fillable = [
        'user_id',
        'category_id',
        'title', 
        'description', 
        'slug'
    ];

    static public function generateSlug($originalStr) {
        $baseSlug = Str::of($originalStr)->slug('-');
        $slug = $baseSlug;
        $i = 1;
        while(self::where('slug', $slug)->first()) {
            $slug = "$baseSlug-$i";
            $i++;
        }
        return $slug;
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
