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

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'project_id')->orderBy('id', 'desc');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
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

    public function scopeCompleted($query)
    {
        return $query->where('completion_percent', '100');
    }

    public function scopeInProcess($query)
    {
        return $query->where('project_status', 'In Progress');
    }

    public function scopeOnHold($query)
    {
        return $query->where('project_status', 'On Hold');
    }

    public function scopeFinished($query)
    {
        return $query->where('project_status', 'Finished');
    }

    public function scopeNotStarted($query)
    {
        return $query->where('project_status', 'No Started');
    }

    public function scopeCanceled($query)
    {
        return $query->where('project_status', 'Canceled');
    }

    public function scopeOverdue($query)
    {
        return $query->where('project_status', 'Under Review');
    }
}
