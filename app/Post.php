<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title', 
        'description', 
        'slug'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    

    static public function generateSlug($originalStr) {
        $baseSlug = Str::of($originalStr)->slug('-')->__toString();
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

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
