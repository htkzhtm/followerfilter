@extends('layouts.home')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@section('content')
    <!-- Card -->
    <div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center"> Welcome </h3>
        <hr class="bg-dark mb-4 w-25">


        <div class="card site-description">
            <div class="card-header">
                Web Frontend and backend info.
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">On this page, we will mainly send out information on the following three items.</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top vuejs" src="pic/vue.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Vue.js</h4>
                        <p class="card-text">Vue.js is one modern Javascript library, I use for development mainly. I consider that I transmit what I noticed while developing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top laravel" src="pic/laravel.jpg" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">Laravel</h4>
                        <p class="card-text">Laravel is one of most popular PHP framework. Although it is not very detailed, We also handle it.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="pic/pic20180924.png" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">comming soon...</h4>
                        <p class="card-text">comming soon...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->

<!--
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="display-4">Products</h3>
                <hr class="bg-dark w-25 ml-0">
                <p class="lead">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <ul class="list-unstyled pl-4">
                    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
                    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
                    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
                </ul>
                <a href="#" class="btn btn-outline-primary rounded-0"> Read More</a>
            </div>
            <div class="col-md-4 mt-5">
                <img class="card-img-top" src="https://dummyimage.com/300x300/c7c7c7/000.png" alt="Card image cap">
            </div>
        </div>
    </div>
-->
@endsection
