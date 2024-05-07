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
            <h1><a href="https://stackfindover.com/">Logo</a></h1>
          </div>
          <div class="intro-content-wrapper">
            <h1 class="intro-title" style="color:#000000">Sign Up!</h1>
            <a href="{{ route('login') }}" class="btn btn-read-more">Login</a>
          </div>
          
        </div>
        <div class="col-sm-6 col-md-5 form-section">
          <div class="login-wrapper">
            <h2 class="login-title">Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
              </div>
              <div class="form-group">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group mb-3">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group mb-3">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required>
              </div>
              <div class="form-group mb-3">
                <label for="phone_number" class="sr-only">Phone Number</label>
                <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-5">
                <button type="submit" class="btn login-btn">Sign Up</button>
              </div>
            </form>           
            
          </div>
        </div>
      </div>
    </div>
@endsection
