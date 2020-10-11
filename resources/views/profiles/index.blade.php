@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row ">
       <div class="col-4 p-5 text-center"><img src="{{$user->profile->profileImage()}}" style="max-width:150px;height:150px;" class="rounded-circle w-100" alt=""></div>
       <div class="col-8 pt-5">
          
           <div class="d-flex justify-content-between align-items-baseline">

            <div class="d-flex align-items-center pb-4"> 
            <div class="h2 font-text-bold">{{$user->username ?? ''}}</div>

            <!-- Vue.js component -->
               <follow-button user_id="{{$user->id}}" follows="{{$follows}}"></follow-button>
            </div>
          
           </div>

           <div class="d-flex">
                <div class="pr-5"><strong>{{$postCount}} </strong>posts</div>
                <div class="pr-5"><strong>{{$followersCount}} </strong>followers</div>
                <div class="pr-5"><strong>{{$followingCount}} </strong>following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{$user->profile->title ?? ''}}</div>
           <div class="">{{$user->profile->description ?? ''}}</div>
           <div><a href="#">{{$user->profile->url ?? ''}}</a></div>
        </div>
   </div>
   <div class="row pt-4">
      @foreach($user->posts as $post)
         <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
               <img src="/storage/{{$post->image}}" style="object-fit: cover;" class="w-100">
            </a>
         </div>
      @endforeach
   </div>

</div>
@endsection
