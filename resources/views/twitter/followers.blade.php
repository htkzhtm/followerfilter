@extends('layouts.home')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
    <div class="container container mt-4 mb-5">
        <div class="row">
            <div id="app">
                <follower-card :followers="{{ $followers }}"/>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
