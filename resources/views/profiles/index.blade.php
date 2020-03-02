@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
  <div class="col-3 p-5">
   <!-- <img src="https://source.unsplash.com/200x200/?instagram" class="rounded-circle"/> -->
   <img src="https://qph.fs.quoracdn.net/main-qimg-eada0af1ba55ed58034e4a828dda8403" style="height: 200px; width: 200px" class="rounded-circle"/>
  </div>
  <div class="col-9 pt-5">
  <div class="d-flex justify-content-between align-items-baseline">
  <h1>{{ $user-> username }}</h1>
  <a href="/p/create">Add New Post</a>
</div>
<a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
   <div class='d-flex'>
   <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
   <div class="pr-5"><strong>23k</strong> followers</div>
   <div class="pr-5"><strong>121</strong> followings</div>

   </div>
   <div>
   <div class="pt-2 font-weight-bold">{{ $user->profile->title }}</div>
   <div>{{ $user->profile->description }}</div>
   <div><a href="#">{{ $user->profile->url }}</a></div>
   </div>
  </div>
  </div>
   <div class="row pt-5">

   @foreach($user->posts as $post)
   <div class="col-4 pb-4">
   <a href="/p/{{ $post->id }}">
         <img src="/storage/{{ $post -> image }}" class="w-100" /> 
      </a>
   </div>
   @endforeach
   </div>

</div>
@endsection
