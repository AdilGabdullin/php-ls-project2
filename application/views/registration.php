<style>
  .field {
    clear: both;
    text-align: right;
    line-height: 25px;
  }

  label {
    float: left;
    padding-right: 10px;
  }

  form {
    float: left
  }
</style>
<h1>Регистрация</h1>
<span style="color: red"><?= $data['message'] ?></span>
<br>
<form action="/registration/new/" method="post" enctype="multipart/form-data">
  <div class="field">
    <label>Логин</label>
    <input name="login">
  </div>
  <div class="field">
    <label>Пароль</label>
    <input name="password1" type="password">
  </div>
  <div class="field">
    <label>Пароль ещё раз</label>
    <input name="password2" type="password">
  </div>
  <div class="field">
    <label>Имя</label>
    <input name="name">
  </div>
  <div class="field">
    <label>Возраст</label>
    <input name="age">
  </div>
  <div class="field">
    <label>Описание</label>
    <textarea name="description"></textarea>
  </div>
  <div class="field">
    <label>Аватар</label>
    <input name="avatar" type="file">
  </div>
  <div class="field">
    <input type="submit">
  </div>
</form>
