<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function votedUsers(){ //or simply likes
        return $this->belongsToMany(User::class, 'likes')->withPivot('is_dislike')->withTimestamps();
    }
}
