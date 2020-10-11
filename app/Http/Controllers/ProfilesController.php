<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;

// import user model
use App\Models\User;

class ProfilesController extends Controller
{

    
    public function index(User $user)
    {
        //if auth user then, if if auth user is following the $user's profiles return
        //otherwise return false
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        //Caching the expensive queries so not to update every single time 
        //e.g. every 30 secs
        $postCount = Cache::remember('count.posts.'.$user->id, 
        now()->addSeconds(30),
        function() use ($user){
            return $user->posts->count();
        });
        
        $followersCount = Cache::remember('count.followers.'.$user->id, 
        now()->addSeconds(30),
        function() use ($user){
            return $user->profile->followers->count();
        });
        
        $followingCount = Cache::remember('count.following.'.$user->id, 
        now()->addSeconds(30),
        function() use ($user){
            return $user->following->count();
        });
       
        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {   
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            "title"=> 'required',
            "description"=> "required",
            "url"=> "url",
            "image"=> ""
        ]);
        
         
        if(request('image')){

            $imagePath = request("image")->store('profile','public');

            //image resizing
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        redirect("/profile/{{$user->id}}");
    }
}
