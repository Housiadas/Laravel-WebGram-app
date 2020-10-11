<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //it's ok do not protect anything
    protected $guarded = [];

    //relationship for the user...we followed name convetion
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

