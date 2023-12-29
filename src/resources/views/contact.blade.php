<form action="confirm" method="POST">
  @csrf
  <label for="">お名前</label>
  <input type="text" name="first_name">
  <input type="text" name="last_name">


  <label for="">性別</label>
  <label for="">男性
  <input type="radio" name="gender" value="男" checked>
  </label>
  <label for="">女性
  <input type="radio" name="gender" value="女">
  </label>
  <label for="">その他
  <input type="radio" name="gender" value="その他">
  </label>

  <label for="">メールアドレス</label>
  <input type="email" name="email">

  <label for="">電話番号</label>
  <input type="tel" name="tel_1">
  <input type="tel" name="tel_2">
  <input type="tel" name="tel_3">

  <label for="">住所</label>
  <input type="text" name="address">

  <label for="">建物名</label>
  <input type="text" name="building">

  <select name="category_id" id="">
    <option value="">選択してください</option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
  </select>

  <label for="">お問い合わせ内容</label>
  <textarea name="detail" id="" cols="30" rows="10"></textarea>
  <input type="submit" value="確認画面">
</form>