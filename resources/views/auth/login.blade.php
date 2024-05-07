@extends('layouts.app')

@section('content')
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-md-7 intro-section">
          <div class="brand-wrapper">
            <h1><a href="https://stackfindover.com/">Logo</a></h1> <!--DELETE -->
          </div>
          <div class="intro-content-wrapper">
            <h1 class="intro-title" style="color:#000000">Sign in to your account!</h1>
            <a href="#!" class="btn btn-read-more">Read more</a>
          </div>
          
        </div>
        <div class="col-sm-6 col-md-5 form-section">
          <div class="login-wrapper">
            <h2 class="login-title">Sign in</h2>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group mb-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
              </div>
              <div class="d-flex justify-content-between align-items-center mb-5">
              <input type="submit" class="btn login-btn" value="Login">
                <a href="#!" class="forgot-password-link">Password?</a>
              </div>
            </form>           
            <p class="login-wrapper-footer-text">Need an account? <a  href="{{ route('register') }}" class="text-reset">Signup here</a></p>
          </div>
        </div>
      </div>
    </div>
@endsection
