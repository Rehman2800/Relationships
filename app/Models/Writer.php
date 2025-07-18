<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $guarded = [];

    public function post() {
        return $this->hasMany(Post::class, 'writer_id','id');    
    }
}
