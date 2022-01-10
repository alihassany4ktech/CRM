<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskLabel extends Model
{
    public function label()
    {
        return $this->belongsTo(TaskLabelList::class, 'task_label_list_id');
    }
}
