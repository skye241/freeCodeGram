@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage() }}" , class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-4"> 
                    <h4>{{ $user->username}}</h4>
                    {{-- <button class="btn btn-primary ml-4">Follow</button> --}}

                    {{-- <follow-button></follow-button> --}}

                    {{-- <example-component></example-component> --}}


                </div>



                @can('update', $user->profile)
                <a href="/p/create">Add new post</a>
                @endcan
            </div>
            @can('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
                <follow-button></follow-button>


            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="www.freecodecamp.org">{{$user->profile->url ?? 'N/A'}}</div>


        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image}}" class="w-100">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection