<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCommentLike extends Model
{
    use HasFactory;

    protected $table = 'project_comment_likes';

    protected $fillable = ['project_comment_id', 'user_id'];

}
