<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai konvensi penamaan Laravel
    protected $table = 'tasks_task';

    // Jika primary key bukan 'id', tentukan di sini
    protected $primaryKey = 'id';

    // Menentukan apakah primary key menggunakan auto-increment atau tidak
    public $incrementing = true;

    // Menentukan format primary key (string atau integer)
    protected $keyType = 'int';

    // Jika tabel tidak menggunakan timestamp Laravel (created_at, updated_at)
    public $timestamps = true;

    // Definisikan relasi ke UserStory
    public function userStory()
    {
        return $this->belongsTo(UserStory::class, 'user_story_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_to_id');
    }
}
