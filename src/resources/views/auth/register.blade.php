@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<script src="https://kit.fontawesome.com/1c6a39b6b2.js" crossorigin="anonymous"></script>
@endsection

@section('main')
<div class="register-screen">
    <div class="ttl">
        <h2 class="main-ttl">Registration</h2>
    </div>
    <form action="/register" method="post">
        @csrf
        <div class="input-container">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Username" name="name" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>
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
            <input type="submit" value="登録">
        </div>
    </div>
</form>
@endsection