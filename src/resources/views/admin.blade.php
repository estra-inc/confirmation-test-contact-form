@extends('layouts/app')

@section('content')
<div>
  <h2>Admin</h2>
  <div>
    <form action="/search" method="post">
      @csrf
      <div>
        <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">
        <div>
          <select name="gender">
            <option disabled selected>性別</option>
            <option value="1">男性</option>
            <option value="2">女性</option>
            <option value="3">その他</option>
          </select>
        </div>
        <div>
          <select name="category_id">
            <option disabled selected>お問い合わせの種類</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->content }}</option>
            @endforeach
          </select>
        </div>
        <div>
          <input type="date" name="date">
        </div>
      </div>
      <input type="submit" value="検索">
      <input type="submit" value="リセット">
    </form>
  </div>
  {{ $contacts->links() }}
  <table>
    <tr>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>お問い合わせの種類</th>
      <th></th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
      <td>{{$contact->first_name}}{{$contact->last_name}}</td>
      <td>
        @if($contact->gender == 1)
          男性
        @elseif($contact->gender == 2)
          女性
        @else
          その他
        @endif
      </td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->category->content}}</td>
      <td>
        <a href="">詳細</a>
      </td>
    </tr>
    @endforeach
  </table>


</div>

@endsection