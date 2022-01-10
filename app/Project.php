<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

    use SoftDeletes;
    protected $dates = ['start_date', 'deadline'];

    public function client()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
    public function members()
    {
        return $this->hasMany(ProjectMember::class, 'project_id');
    }

    public function files()
    {
        return $this->hasMany(ProjectFile::class, 'project_id')->orderBy('id', 'desc');
    }
    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id')->orderBy('id', 'desc');
    }

    public static function getProject()
    {
        $projects = Project::leftJoin('users', 'users.id', '=', 'projects.user_id')
            ->leftJoin('project_categories', 'project_categories.id', '=', 'projects.category_id')
            ->select(
                'projects.id',
                'projects.project_name',
                'users.name',
                'project_categories.name',
                'projects.start_date',
                'projects.deadline',
            )->get()->toArray();
        return $projects;
    }
}
