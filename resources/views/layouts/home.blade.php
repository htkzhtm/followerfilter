<!--
Copyright (c) 2017 Mohamed AZOUAOUI
Released under the MIT license
https://github.com/azouaoui-med/pro-sidebar-template
-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/base.css') }}" rel="stylesheet">
<script src="js/base.js" rel="stylesheet"></script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 

</head>

<body>
<nav class="navbar navbar-light fixed-top navbar-expand-lg" style="background-color: #e3f2fd;">
  <a target="_self" href="#top" class="navbar-brand">Follower Manager</a>
  @if(Auth::check())
    <a rel="noopener" target="_self" href="auth/twitter/logout" class="navbar-brand">Logout</a>
  @endif
</nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content" style="margin-top: 20px;">
    <div class="container-fluid">
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </main>

  <!-- page-content" -->

<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>