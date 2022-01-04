<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{

    protected $hidden = ['user_id', 'project_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
