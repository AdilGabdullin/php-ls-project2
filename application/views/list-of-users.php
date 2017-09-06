<style>
  table {
    border-collapse: collapse;
  }

  td, th {
    border: 1px solid grey;
    padding: 4px;
    text-align: center;
  }
</style>
<p><a href="/">На главную</a></p>
<table>
  <tr>
    <th>Ид.</th>
    <th>Логин</th>
    <th>Имя</th>
    <th>Возраст</th>
    <th>Описание</th>
    <th>Фото</th>
    <th>Зрелость</th>
  </tr>
    <?php foreach ($data as $user) : ?>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['login'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['age'] ?></td>
        <td><?= $user['description'] ?></td>
        <td>
          <a href="/files/change/<?= $user['id'] ?>/">
            <img src="/photos/<?= $user['photo'] ?>" height="100" alt="photo">
          </a>
        </td>
        <td><?= $user['maturity'] ?></td>
      </tr>
    <? endforeach; ?>
</table>
