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
                        <select class="reservation__time">
                            <option value="1">17:00</option>
                            <option value="2">17:30</option>
                            <option value="3">18:00</option>
                            <option value="4">18:30</option>
                            <option value="5">19:00</option>
                            <option value="6">19:30</option>
                            <option value="7">20:00</option>
                            <option value="8">20:30</option>
                            <option value="9">21:00</option>
                        </select>
                    </div>
                    <div class="form-number">
                        <select class="reservation__number">
                            <option value="1">1名</option>
                            <option value="2">2名</option>
                            <option value="3">3名</option>
                            <option value="4">4名</option>
                            <option value="5">5名</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="reservation-content">
                <div class="reservation-content__card">
                    <p class="reservation__shop"></p>
                    <p class="reservation__date"></p>
                    <p class="reservation__time"></p>
                    <p class="reservation__number"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
