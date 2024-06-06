@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('main')
<div class="thanks-screen">
    <div class="ttl">
        <h2 class="main-ttl">会員登録ありがとうございます</h2>
    </div>
    <form action="/login" method="post">
        <div class="btn-container">
            <input type="submit" value="ログインする">
        </div>
    </form>
</div>
@endsection