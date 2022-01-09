<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function label()
    {
        return $this->hasMany(TaskLabel::class, 'task_id');
    }
}
