@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/67547697_2445465552340118_1550054620544368640_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_ohc=8QJEachg2XIAX_IJrTm&oh=f78431d9806b158e2720112e38c6dad2&oe=5E9A0AE7" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong>153</strong> posts 
                </div>
                <div class="pr-5"> 
                    <strong>24k</strong> followers
                </div>
                <div class="pr-5">
                    <strong>200</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div> {{ $user->profile->description }} </div>
            <div><a href="#"> {{ $user->profile->url }} </a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4"><img src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.561.561a/79225007_186012015855932_2310000774829668783_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=GyAlDkmWkZQAX8UEvQ8&oh=91061ab671431126c4fa96ca424e8ef4&oe=5EB49066" class="w-100"></div>
        <div class="col-4"><img src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.561.561a/79225007_186012015855932_2310000774829668783_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=GyAlDkmWkZQAX8UEvQ8&oh=91061ab671431126c4fa96ca424e8ef4&oe=5EB49066" class="w-100"></div>
        <div class="col-4"><img src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-15/e35/c94.0.561.561a/79225007_186012015855932_2310000774829668783_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=GyAlDkmWkZQAX8UEvQ8&oh=91061ab671431126c4fa96ca424e8ef4&oe=5EB49066" class="w-100"></div>
    </div>
</div>
@endsection
