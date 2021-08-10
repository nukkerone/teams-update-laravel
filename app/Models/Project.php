<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = ['owner_id', 'name', 'description', 'cycle_type', 'color'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_users', 'project_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comm::class, 'project_users', 'project_id', 'id');
    }
}
