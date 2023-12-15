@extends('layouts.app')

@section('content')
<h2>Register</h2>
<form action="/register" method="post">
  @csrf
  <div>
    <label for="name">お名前</label>
      <input type="text" name="name" id="name">
  </div>
  <p>
    @error('name')
    {{ $message }}
    @enderror
  </p>
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
<a href="/login">Login</a>
@endsection('content')