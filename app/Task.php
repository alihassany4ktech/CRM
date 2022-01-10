<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $dates = ['due_date', 'start_date'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id')->withTrashed();
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'task_users');
    }


    public function label()
    {
        return $this->hasMany(TaskLabel::class, 'task_id');
    }


    public function labels()
    {
        return $this->belongsToMany(TaskLabelList::class, 'task_labels', 'task_id', 'task_label_list_id');
    }

    public function category()
    {
        return $this->belongsTo(TaskCategory::class, 'task_category_id');
    }
    public function files()
    {
        return $this->hasMany(TaskFile::class, 'task_id');
    }

    public static function getTask()
    {
        $records = DB::table('tasks')->select(
            [
                'id',
                'title',
                'project_id',
                'task_category_id',
                'start_date',
                'due_date',
                'status',
            ]
        )->get()->toArray();
        return $records;
    }
}
