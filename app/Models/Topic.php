<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_replay_user_id', 'order', 'excerpt', 'slug'];

    public function category()
    {
    	return $this->belongsTo(category::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
