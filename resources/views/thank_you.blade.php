<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('sc_head')
    <style>
    body{
        background-image: url(/img/sma1.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        
    }
    .login-box{
        color: black;
        background-color:whitesmoke;
        text-align:center;
        border: 1px solid #BFBFBF;
        box-shadow: 10px 10px 5px #aaaaaa 0,4 !important;
    }

    </style>
</head>
<body class="hold-transition">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>
    <!-- Pesan Error -->
            <H2 class="card-title">TERIMA KASIH</H2>
            <p class="card-subtitle mb-2 text-muted">Karena melakukan proses pengisian data dengan benar, data anda sudah tersimpan di database.</p>
            <p class="card-text">Catat no daftar anda di bawah ini</p>
            <br>
            <p style="font-size:25px;">{{ $siswa['no_daftar'] }}</p>
            <br>
            <p>Silahkan ikuti proses selanjutnya</p>
      <div class="row">
        <div class="col-xs">            
        <a href="{{ url('/') }}"><button type="button" class="btn bg-orange btn-flat tombol"><i class="fa fa-home"></i> <br>Home</button></a>
        </div>
        <!-- /.col -->
      </div>
  </div>
  <!-- /.login-box-body -->
</div>
</body>
@include('sc_footer')
</html>