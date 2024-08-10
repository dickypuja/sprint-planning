<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStory extends Model
{
    use HasFactory;

    protected $table = 'v_user_story';

    public function milestone()
    {
        return $this->belongsTo(Milestone::class, 'milestone_id');
    }
}
