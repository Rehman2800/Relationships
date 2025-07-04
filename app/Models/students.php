<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class students extends Model {
    public $timestamps = false;
    protected $guarded = [];
    public function stdData() {
        return $this->hasOne(StdData::class, 'std_id');
    }
}