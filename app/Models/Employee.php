<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function roles() {
        return $this->belongsToMany(Role::class, 'emp_roles','emp_id', 'role_id');
    }
}
