<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    protected $fillable = ['name'];

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
