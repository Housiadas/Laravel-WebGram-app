<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Models\User;
use App\Models\Post;

class PostsController extends Controller
{
    //use auth middleware so you can't see /p/creare if not authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }

    //show all posts from last we followed
    public function index(){

        $user = auth()->user()->following()->pluck('profiles.user_id');

        $posts= Post::whereIn('user_id', $user)->with('user')->latest()->paginate(5);
    
        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            "caption"=> 'required',
            "image"=> ['required', 'image']
        ]);

        $imagePath = request("image")->store('img','public');

        //image resizing
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        
        //you must be signed in to create image
        auth()->user()->posts()->create([
            'caption'=>$data["caption"],
            'image'=>$imagePath,
        ]);

        return redirect('/profile/'.auth()->user()->id);
    }

    //router model binding in laravel super cool
    public function show(\App\Models\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
