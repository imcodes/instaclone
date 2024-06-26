<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'post_id',
        'reply_to'
    ];
    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // get comment replies
    public function replies(){
        return $this->hasMany(Comment::class,'reply_to','id');
    }
}
