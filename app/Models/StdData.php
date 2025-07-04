<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StdData extends Model
{
    // public $timestamps = false; // ✅ Correct way to disable timestamps
    protected $guarded = [];
    
    public function student() {
        return $this->belongsTo(students::class,'std_id', 'id');
    }
}

