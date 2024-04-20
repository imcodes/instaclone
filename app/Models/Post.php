<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'caption',
        'description',
        'media',
        'likes',
        'shares'
    ];

    // Return related comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    // Return related engaements
    public function engagements()
    {
        return $this->hasMany(Engagement::class);
    }

    // Get Post User
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
