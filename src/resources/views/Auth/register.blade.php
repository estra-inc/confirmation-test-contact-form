@extends('layouts.app')

@section('content')
<h2>Register</h2>
<form action="/register" method="post">
  @csrf
  <div>
    <label for="name">お名前</label>
      <input type="text" name="name" id="name">
  </div>
  <div>
    <label for="email">メールアドレス</label>
      <input type="mail" name="email" id="email">
  </div>
  <div>
    <label for="password">パスワード</label>
      <input type="password" name="password" id="password">
  </div>
  <input type="submit" value="登録">
</form>
@endsection('content')