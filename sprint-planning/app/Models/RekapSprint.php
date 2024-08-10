<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekapSprint extends Model
{
    protected $table = 'project_milestone_summary'; // Tentukan nama tabel secara eksplisit

    public function project()
    {
        return $this->belongsTo(Project::class, 'project', 'project');
    }
}
