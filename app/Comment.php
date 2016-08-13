<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];
    
    public function tweet()
    {
        return $this->belongsTo(Tweet::class);
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
