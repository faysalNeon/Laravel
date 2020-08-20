<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    protected $appends=[];

    public function notun()
    {
        return $this->hasMany(Post::class);
    }

}
