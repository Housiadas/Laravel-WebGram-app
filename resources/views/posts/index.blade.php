@extends('layouts.app')

@section('content')
<div class="container">
            @foreach($posts as $post)
               <div class="row">
                  <div class="col-8 offset-2">
                     <div class="d-flex align-items-center">
                        <div class="p-1">
                           <img src="{{ $post->user->profile->profileImage()}}" class=' rounded-circle' 
                              style="max-width:50px"
                              alt="">
                        </div>
                           <a href="/profile/{{$post->user->id}}">
                              <div class='font-weight-bold text-dark'>{{$post->user->username}}</div>
                           </a>
                        
                     </div>
                     <img src="/storage/{{$post->image}}" alt="" class="w-100">
                  </div>
               </div>
               <div class="row">
                  <div class="col-8 offset-2">
                     <div class='pt-2'> 
                        <p>
                        <span class="font-weight-bold">
                              <a href="p/profile/{{$post->user->id}}" class="text-dark pr-2">
                                 {{$post->user->username}}</a>
                        </span>  {{$post->caption}}
                        </p>
                     </div>
                  </div>
               </div>
            @endforeach
            <div class="row">
               <div class="col-12 d-flex justify-content-center">
               {{$posts->links("pagination::bootstrap-4")}}
               </div>
            </div>
</div>
@endsection
