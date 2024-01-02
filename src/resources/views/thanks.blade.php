@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css')}}">
@endsection

@section('content')
<div class="thanks-page">
  <div class="thanks-page__inner">
    <p class="thanks-page__message">お問い合わせありがとうございました</p>
    <form class="thanks-page__form" action="/" method="get">
      <button class="thanks-page__btn btn">HOME</button>
    </form>
  </div>
</div>
<div class="thanks-page-bg__inner">
  <span class="thanks-page-bg__text">Thank you</span>
</div>
@endsection