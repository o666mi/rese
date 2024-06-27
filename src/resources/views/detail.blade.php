@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('main')
<div class="shop-detail">
    <div class="shop__item">
        <div class="shop-detail__card">
            <h2 class="card__ttl">{{ $shop->name }}</h2>
            <img src="{{ $shop->image_url }}" alt="Shop Image">
            <div class="card__tag">
                <p class="card__area">#{{ $shop->area->area }}</p>
                <p class="card__genre">#{{ $shop->genre->genre }}</p>
            </div>
            <div class="card__comment">
                <p class="detail__comment">{{ $shop->overview }}</p>
            </div>
        </div>
    </div>
    <div class="reservation__item">
        <div class="shop-reservation__card">
            <h2 class="reservation__ttl">予約</h2>
            <div class="form-group">
                <form action="/reservation" method="post">
                @csrf
                    <div class="form-date">
                        <input type="date" name="date" class="form-date" value="{{ $today }}">
                    </div>
                    <div class="form-time">
                        <input type="time" name="time" class="form-time">
                    </div>
                    <select class="form-reservation">
                        <option value="1">1名</option>
                        <option value="1">2名</option>
                        <option value="1">3名</option>
                        <option value="1">4名</option>
                        <option value="1">5名</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
