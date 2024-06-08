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
@endsection

@section('main')
<div class="shop">
    <div class="grid__item">
    @foreach ($shops as $shop)
        <div class="shop__card">
            <img src="{{ $shop->image_url }}" alt="Shop Image">
            <h2 class="card__ttl">{{ $shop->name }}</h2>
            <div class="card__tag">
                <p class="card__area">#{{ $shop->area->area }}</p>
                <p class="card__genre">#{{ $shop->genre->genre }}</p>
            </div>
            <a class="shop__detail-btn" href="/detail{{ $shop->id }}">詳しくみる</a>
        </div>
    @endforeach
    </div>
</div>
@endsection