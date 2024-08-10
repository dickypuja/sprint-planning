<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects_project';

    public function milestones()
    {
        return $this->hasMany(Milestone::class, 'project_id');
    }

    public function rekapSprints()
    {
        return $this->hasMany(RekapSprint::class);
    }
}
