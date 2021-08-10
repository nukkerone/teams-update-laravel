<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentComment extends Model
{
    use HasFactory;

    protected $table = 'comment_comments';

    protected $fillable = ['comment_comment_id', 'user_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function projectComment()
    {
        return $this->belongsTo(ProjectComment::class, 'project_comment_id', 'id');
    }

    public function userLikes()
    {
        return $this->belongsToMany(User::class, 'comment_comment_likes', 'user_id', 'comment_comment_id');
    }
}
