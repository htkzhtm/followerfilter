@extends('layouts.home')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
<a href="/auth/twitter">Login</a>
<a href="/auth/twitter/logout">Logout</a>
@endsection
