<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{
    use HasFactory;

    protected $table = 'project_comments';

    protected $fillable = ['project_id', 'user_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(CommentComment::class, 'project_comment_id', 'id');
    }

    public function userLikes()
    {
        return $this->belongsToMany(User::class, 'project_comment_likes', 'user_id', 'project_comment_id');
    }
}
