@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm-form">
  <h2 class="confirm-form__heading content__heading">Confirm</h2>
  <div class="confirm-form__inner">
    <form action="/thanks" method="post">
      @csrf
      <table class="confirm-form__table">
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お名前</th>
          <td class="confirm-form__data">{{ $contacts['first_name'] }}&nbsp;{{ $contacts['last_name'] }}</td>
          <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}">
          <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">性別</th>
          <td class="confirm-form__data">
            @if($contacts['gender'] == 1)
            男性
            @elseif($contacts['gender'] == 2)
            女性
            @else
            その他
            @endif
          </td>
          <input type="hidden" name="gender" value="{{ $contacts['gender'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">メールアドレス</th>
          <td class="confirm-form__data">{{ $contacts['email'] }}</td>
          <input type="hidden" name="email" value="{{ $contacts['email'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">電話番号</th>
          <td class="confirm-form__data">{{ $contacts['tel_1'] }}{{ $contacts['tel_2'] }}{{ $contacts['tel_3'] }}</td>
          <input type="hidden" name="tel_1" value="{{ $contacts['tel_1'] }}">
          <input type="hidden" name="tel_2" value="{{ $contacts['tel_2'] }}">
          <input type="hidden" name="tel_3" value="{{ $contacts['tel_3'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">住所</th>
          <td class="confirm-form__data">{{ $contacts['address'] }}</td>
          <input type="hidden" name="address" value="{{ $contacts['address'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">建物名</th>
          <td class="confirm-form__data">{{ $contacts['building'] }}</td>
          <input type="hidden" name="building" value="{{ $contacts['building'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お問い合わせの種類</th>
          <td class="confirm-form__data">{{ $category->content }}</td>
          <input type="hidden" name="category_id" value="{{ $contacts['category_id'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お問い合わせ内容</th>
          <td class="confirm-form__data">{{ $contacts['detail'] }}</td>
          <input type="hidden" name="detail" value="{{ $contacts['detail'] }}">
        </tr>
      </table>
      <div class="confirm-form__btn-inner">
        <input class="confirm-form__send-btn btn" type="submit" value="送信" name="send">
        <input class="confirm-form__back-btn" type="submit" value="修正" name="back">
      </div>
    </form>
  </div>
</div>
@endsection