<body>

<div style="width: 500px; margin: 100px auto;">
<div style="text-align:right;">

<h1>会員登録</h1>

<form method="POST" action="/member/store">
  @csrf

  <div>
    <label for="form-name">名前</label>
    <input type="text" name="name" id="form-name" required>
  </div>

  <div>
    <label for="form-tel">電話番号</label>
    <input type="tel" name="phone" id="form-tel">
  </div>

  <div>
    <label for="form-email">メールアドレス</label>
    <input type="email" name="email" id="form-email">
  </div>

  <button type="submit">登録</button>

</form>
