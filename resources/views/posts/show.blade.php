@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="row p-4" style='max-width:80%;'>
    <div class="col-8">
      <img src="/storage/{{$post->image}}" alt="" class="w-100">
    </div>
    <div class="col-4">
      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="{{ $post->user->profile->profileImage()}}" class=' rounded-circle' 
          style="max-width:50px"
          alt="">
        </div>
        <a href="/profile/{{$post->user->id}}">
          <div class='font-weight-bold text-dark'>{{$post->user->username}}</div>
        </a>
        <a href="#" class="pl-2 text-primary">follow</a>
    </div>
      <div class='pt-4'> 
      <hr style='border: 1px #ddf solid;'>

      <p>
        <span class="font-weight-bold">
          <a href="p/profile/{{$post->user->id}}" class="text-dark pr-2">{{$post->user->username}}</a>
        </span>
        {{$post->caption}}
      </p>
    </div>
    </div>
  </div>
</div>

</div>
@endsection
