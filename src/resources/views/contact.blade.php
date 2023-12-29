<form action="confirm" method="post">
  @csrf
  <label for="">お名前</label>
  <input type="text" name="first_name" value="{{ old('first_name') }}">
  <input type="text" name="last_name" value="{{ old('last_name') }}">
  @if ($errors->has('first_name'))
    <p>{{$errors->first('first_name')}}</p>
  @else
    <p>{{$errors->first('last_name')}}</p>
  @endif

  <label for="">性別</label>
  <label for="">男性
  <input type="radio" name="gender" value="1" {{ old('gender') == 1 || old('gender') == null ? 'checked' : '' }}>
  </label>
  <label for="">女性
  <input type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
  </label>
  <label for="">その他
  <input type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }}>
  </label>
  @error('gender')
    <p>{{ $message }}</p>
  @enderror

  <label for="">メールアドレス</label>
  <input type="email" name="email" value="{{ old('email') }}">
  @error('email')
    <p>{{ $message }}</p>
  @enderror

  <label for="">電話番号</label>
  <input type="tel" name="tel_1" value="{{ old('tel_1') }}">
  <input type="tel" name="tel_2" value="{{ old('tel_2') }}">
  <input type="tel" name="tel_3" value="{{ old('tel_3') }}">
  @if ($errors->has('tel_1'))
    <p>{{$errors->first('tel_1')}}</p>
  @elseif ($errors->has('tel_2'))
    <p>{{$errors->first('tel_2')}}</p>
  @else
    <p>{{$errors->first('tel_3')}}</p>
  @endif

  <label for="">住所</label>
  <input type="text" name="address" value="{{ old('address') }}">
  @error('address')
    <p>{{ $message }}</p>
  @enderror

  <label for="">建物名</label>
  <input type="text" name="building" value="{{ old('building') }}">

  <label for="">お問い合わせの種類</label>
  <select name="category_id" id="">
    <option disabled selected>選択してください</option>
      @foreach($categories as $category)
    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->content }}</option>
      @endforeach
  </select>
  @error('category_id')
    <p>{{ $message }}</p>
  @enderror

  <label for="">お問い合わせ内容</label>
  <textarea name="detail" id="" cols="30" rows="10">{{ old('detail') }}</textarea>
  @error('detail')
    <p>{{ $message }}</p>
  @enderror

  <input type="submit" value="確認画面">
</form>