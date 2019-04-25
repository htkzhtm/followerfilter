@extends('layouts.home')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
<a href="/auth/twitter/logout">Logout</a>
    <div class="container container mt-4 mb-5">
        <div class="row">
            <div id="app">
                <follower-card :followers="{{ $followers }}"/>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
