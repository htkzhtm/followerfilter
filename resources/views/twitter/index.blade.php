@extends('layouts.home')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="cover-container mx-auto my-5 py-5">
          <h1>Search your followers</h1>
          <p>Is it hard to search with your many followers?<br>
          With Twitter authentication, you can search for your followers. Please try it.</p>
          <div class="login-button">
            <button onclick="location.href='/auth/twitter'" type="button" class="btn btn-outline-primary btn-lg">
                <i class="fab fa-twitter" id="twitterLogin">Twitterで登録/ログイン</i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
