<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;

    protected $table = 'milestones_milestone';

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function userStories()
    {
        return $this->hasMany(UserStory::class, 'milestone_id');
    }
}
