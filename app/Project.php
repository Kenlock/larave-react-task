<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'project_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
