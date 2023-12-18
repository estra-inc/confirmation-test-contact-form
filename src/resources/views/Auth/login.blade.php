@extends('layouts.app')

@section('link')
<a class="header__link" href="/register">Register</a>
@endsection

@section('content')
<h2>Login</h2>
<form action="/login" method="post">
  @csrf
  <div>
    <label for="email">メールアドレス</label>
      <input type="mail" name="email" id="email">
  </div>
  <p>
    @error('email')
    {{ $message }}
    @enderror
  </p>
  <div>
    <label for="password">パスワード</label>
      <input type="password" name="password" id="password">
  </div>
  <p>
    @error('password')
    {{ $message }}
    @enderror
  </p>
  <input type="submit" value="登録">
</form>
@endsection('content')