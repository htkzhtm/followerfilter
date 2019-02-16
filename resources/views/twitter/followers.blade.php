@extends('layouts.home')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
<div class="container container mt-4 mb-5">
    <div class="row">
        @foreach ($followers as $follower)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top vuejs" src="{{$follower['profile_image_url']}}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title"><i class="fab fa-twitter"></i> {{$follower['name']}}</h4>
                        <h6 class="card-subtitle mb-2"><span class="text-muted nickname">{{$follower['screen_name']}}</span></h6>
                        <p class="card-text">{{$follower['description']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
