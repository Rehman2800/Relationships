<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function order() {
        return $this->hasOne(Order::class)->latestOfMany();
        // return $this->hasOne(Order::class)->oldestOfMany();
    }
}
