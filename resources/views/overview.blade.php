@extends('layouts.home')
@section('title', 'person')

<link href="{{ asset('css/introduction/overview.css') }}" rel="stylesheet">

@section('content')
<div class="container container mt-4 mb-5">
    <h3 class="display-4 text-center"> Author Overview </h3>
    <hr class="bg-dark mb-4 w-25">
<div>
<div class="panel-body" >
    <div class="row">
    <div class=" col-md-9 col-lg-9 "> 
        <img alt="User Pic" src="pic/pic20190209.png" class="img-circle img-responsive" align="center">
        <table class="table table-user-information">
        <tbody>
            <tr>
            <td>Name:</td>
            <td>Hitomi Hatsukaze</td>
            </tr>
            <tr>
            <td>Gender:</td>
            <td>Male</td>
            </tr>
            <tr>
            <td>Age:</td>
            <td>22~27</td>
            </tr>
            <tr>
            <td>Prefecture:</td>
            <td>Aichi Toyohashi -> Shimane Mastue -> Tokyo Chiyoda (Live in Saitama Omiya)</td>
            </tr>
            <tr>
            <tr>
            <td>Department:</td>
            <td>Engineer for Web</td>
            </tr>
            <tr>
            <td>Language:</td>
            <td>C++, Java, Perl, C#, PHP, JS</td>
            </tr>
            <td>Hobby:</td>
            <td>Waking (Pokemon GO)</td>
            </tr>
            <tr>
            <td>Favorite:</td>
            <td>Cocktail (Based Gin Vodka, or Rum)</td>
            </tr>
            <tr>
            <td>Dislike:</td>
            <td>Raw fish</td>
            </tr>
            <td>Others:</td>
            <td>
                <a href="https://github.com/htkzhtm/pages" target="_blank"><i class="fab fa-github"></a></i>
                <a href="https://twitter.com/intent/user?user_id=1044220714536992768" target="_blank"><i class="fab fa-twitter"></a></i>
            </td>
            </tr>
            
        </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
