<!DOCTYPE html>
<html>
<title>Muhipo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="{{ asset('component/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('component/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
<link rel="stylesheet" href="{{ asset('component/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}"> -->
@include('sc_head')
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("../img/sma1.jpg");
  width: 100% !important;
  height: 100% !important;
  padding: 500px 30px 90px 30px;
}

.w3-bar .w3-button {
  padding: 16px;
}


</style>
<body>

<!-- Header with full-height image -->
<header>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-wide">Muhipo</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{ url('/list_siswa') }}" class="w3-bar-item w3-button"><i class="fa fa-bars"></i> LIST SISWA</a>
      <a href="{{ url('/daftar/add')}}" class="w3-bar-item w3-button"><i class="fa fa-user"></i> DAFTAR</a>
        @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="w3-bar-item w3-button">ADMIN</a>
                @else
                    <a href="{{ route('login') }}" class="w3-bar-item w3-button">LOGIN</a>
                    <!--@if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif -->
                @endauth
        @endif
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="{{ url('/')}}" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="{{ url('/list_siswa')}}" onclick="w3_close()" class="w3-bar-item w3-button">LIST SISWA</a>
  <a href="{{ URL('/daftar/add')}}" onclick="w3_close()" class="w3-bar-item w3-button">DAFTAR</a>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/dashboard') }}" class="w3-bar-item w3-button">ADMIN</a>
            @else
                <a href="{{ route('login') }}" class="w3-bar-item w3-button">LOGIN</a>
                <!--@if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif -->
            @endauth
        </div>
    @endif
</nav>
</header>