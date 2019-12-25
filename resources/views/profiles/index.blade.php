@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/67547697_2445465552340118_1550054620544368640_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_ohc=8QJEachg2XIAX_IJrTm&oh=f78431d9806b158e2720112e38c6dad2&oe=5E9A0AE7" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div>
                <h1>{{ $user->username }}</h1>
                <a href="/p/create" class="d-flex justify-content-between align-items-baseline">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong> {{ $user->posts->count()}} </strong> posts 
                </div>
                <div class="pr-5"> 
                    <strong>24k</strong> followers
                </div>
                <div class="pr-5">
                    <strong>200</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold"> {{optional($user->profile)->title }} </div>
            <div> {{ optional($user->profile)->description }}</div>
            <div><a href=""> {{ optional($user->profile)->url }} </a></div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}" >
                    <img src="/storage/{{ $post->image }}" class="w-100 ">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
