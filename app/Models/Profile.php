<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/default.png';
        return '/storage/'. $imagePath;
    }

    //followers
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    
    //relationship for the user...we followed name convetion
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

