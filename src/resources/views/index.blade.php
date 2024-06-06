@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<script src="https://kit.fontawesome.com/1c6a39b6b2.js" crossorigin="anonymous"></script>
@endsection

@section('header')
<form class="search-form">
    <div class="search-form__area">
        <select class="search-form__area-select" name="area">
            <option disabled selected>All area</option>
            <option value="1">東京都</option>
            <option value="2">大阪府</option>
            <option value="3">福岡県</option>
        </select>
    </div>
    <div class="search-form__genre">
        <select class="search-form__genre-select" name="genre">
            <option disabled selected>All genre</option>
            <option value="1">寿司</option>
            <option value="2">焼肉</option>
            <option value="3">居酒屋</option>
            <option value="4">イタリアン</option>
            <option value="5">ラーメン</option>
        </select>
    </div>
    <div class="search-form__actions">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input class="search-form__search-btn btn" type="submit" value="Search …">
    </div>
</form>
<div class="shop">
    <div class="shop__inner">
        
    </div>
</div>
@endsection