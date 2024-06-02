@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<script src="https://kit.fontawesome.com/1c6a39b6b2.js" crossorigin="anonymous"></script>
@endsection

@section('main')
<div class="login-screen">
    <div class="ttl">
        <h2 class="main-ttl">Registration</h2>
    </div>
    <form action="/login" method="post">
        <div class="input-container">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}">
            @error('email')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="input-container">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
            @error('password')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="btn-container">
            <input type="submit" value="ログイン">
        </div>
    </div>
</form>
@endsection