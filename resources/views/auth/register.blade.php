@extends('layouts.app')
<style>
  body{
    background-image:url('img/bg-log-reg.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    animation-delay: -1s;
  }
  .register-box{
    color: white;
    animation: fadeIn;
    animation-duration: 8s;
  }
</style>
@include('sc_head')
@section('content')
<body class="hold-transition">
<div class="register-box">
  <div class="register-logo">
    <a style="color: black;" href="{{ url('/dashboard') }}"><b>SMA N 1</b> Muhammadiyah Ponorogo</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
    
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    
    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <form action="{{ route('register') }}" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

@include('sc_footer')
@endsection
