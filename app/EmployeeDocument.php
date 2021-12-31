<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDocument extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function getnameAttribute($value)
    // {
    //     if ($value == null) {
    //         return '';
    //     }
    //     return explode(',', $value);
    // }

    // public function getfilenameAttribute($value)
    // {
    //     if ($value == null) {
    //         return '';
    //     }
    //     return explode(',', $value);
    // }
}
