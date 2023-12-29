<head>
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
</head>

<div class="contact-form">
  <h2 class="contact-form__heading">Contact</h2>
  <div class="contact-form__inner">
    <form action="confirm" method="post">
      @csrf
      <div class="contact-form__group">
        <label class="contact-form__label" for="name">お名前</label>
        <input type="text" name="first_name" id="name" value="{{ old('first_name') }}">
        <input type="text" name="last_name" id="name" value="{{ old('last_name') }}">
      </div>
      <p class="contact-form__error-message">
        @if ($errors->has('first_name'))
          {{$errors->first('first_name')}}
        @else
          {{$errors->first('last_name')}}
        @endif
      </p>

      <div class="contact-form__group">
        <label class="contact-form__label">性別</label>
        <div>
          <input type="radio" name="gender" id="male" value="1" {{ old('gender') == 1 || old('gender') == null ? 'checked' : '' }}>
          <label for="male">男性</label>
        </div>
        <div>
          <input type="radio" name="gender" id="female" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>
          <label for="female">女性</label>
        </div>
        <div>
          <input type="radio" name="gender" id="other" value="3" {{ old('gender') == 3 ? 'checked' : '' }}>
          <label for="other">その他</label>
        </div>
      </div>
      <p class="contact-form__error-message">
        @error('gender')
          {{ $message }}
      @enderror
      </p>


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
  </div>
</div>