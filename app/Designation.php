<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function members()
    {
        return $this->hasMany(User::class, 'designation_id');
    }
}
