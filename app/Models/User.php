<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Mail;
use App\Mail\UserWelcomeMail;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //here we create the profile auto after the users registration
    protected static function boot()
    {
        parent::boot();

        static::created(function($user){
            $user->profile()->create([
                'title'=> $user->username,

            ]);
            //IT'S NOT THE WWRIGHT WAY FOR PRODUCTION..MAYBE BAD 
            //FOR SPAM ETC..
            Mail::to($user->email)->send(new UserWelcomeMail());
        });

    }

    //user's following
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }


    //user has many posts
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', "DESC");
    }

    //reverse user call profile here
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
