<h1>Изменение аватара</h1>
<h2>Имя: <?= $data['name'] ?></h2>
<p>Старый аватар</p>
<img src="/photos/<?= $data['photo'] ?>" alt="аватар">
<form action="/files/change/<?= $data['id'] ?>/" method="post" enctype="multipart/form-data">
  <div class="field">
    <label>Новый аватар</label>
    <input name="avatar" type="file">
  </div>
  <div class="field">
    <input type="submit" value="Изменить">
  </div>
</form>
