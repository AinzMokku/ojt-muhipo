<!DOCTYPE html>
<html>
<title>Welcome</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/w3.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="{{ asset('component/bootstrap/dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('component/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
<link rel="stylesheet" href="{{ asset('component/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
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
    <a href="#home" class="w3-bar-item w3-button w3-wide">Muhipo</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{ url('/list_siswa') }}" class="w3-bar-item w3-button"><i class="fa fa-bars"></i> LIST SISWA</a>
      <a href="#daftar" class="w3-bar-item w3-button"><i class="fa fa-user"></i> DAFTAR</a>
      <a href="#news" class="w3-bar-item w3-button"><i class="fa fa-th"></i> NEWS</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
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
  <a href="{{ url('/list_siswa') }}" onclick="w3_close()" class="w3-bar-item w3-button">LIST SISWA</a>
  <a href="#daftar" onclick="w3_close()" class="w3-bar-item w3-button">DAFTAR</a>
  <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button">NEWS</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
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

<div class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Sma Muhammadiyah 1 Ponorogo</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Sma Muhammadiyah 1 Ponorogo</span><br>
    <span class="w3-large">Situs pendaftaran peserta didik baru muhipo</span>
    <p><a href="#daftar" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Daftar Peserta Didik Baru</a></p>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" id="daftar" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6" style="padding-left:10%;">
      <h3 style="font-size: 30px;">Pendaftaran Peserta</h3>
      <p>Bagi yang ingin melakukan pendaftaran<br>bisa klik link di bawah</p>
      <p><a href="{{ url('/daftar/add') }}" class="w3-button w3-black"><i class="fa fa-file"> </i> Daftar</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="{{ url('../img/log.png') }}" style="padding-left:20%;" alt="Buildings" width="500" height="300">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="news">
  <h3 class="w3-center">Berita Terbaru</h3>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    @foreach($note as $n)
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
        <input type="hidden" name="{{ $n->id }}">
          <p class="w3-center w3-large">{{ $n->feature }}</p>
          <p class="w3-opacity">{{ $n->created_at }}</p>
          <!-- {{ $n->content }} -->
          <p><a href="{{ url('/pengumuman',$n->id) }}"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-file"></i></button></a></p>
        </div>
      </div>  
    </div>
    @endforeach
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Hubungi Kami</h3>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Jl. Batoro Katong No.6B, Sultanagung, Nologaten, Ponorogo</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: (0352) 481521</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: muh1po_first@yahoo.co.id</p>
    <p><i class="fa fa-chrome fa-fw w3-xxlarge w3-margin-right"> </i> website www.smamuhipo.sch.id</p>
    <br>
    <!-- Image of location/map -->
    <!-- <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px"> -->
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Copy right by <a href="https://www.smamuhipo.sch.id/" title="SMA Muhipo" target="_blank" class="w3-hover-text-green">SMA Muhipo</a></p>
</footer>


@include('sc_footer')

<script>
// Modal Image Gallery
// function onClick(element) {
//   document.getElementById("img01").src = element.src;
//   document.getElementById("modal01").style.display = "block";
//   var captionText = document.getElementById("caption");
//   captionText.innerHTML = element.alt;
// }

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>