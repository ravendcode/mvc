<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="all">
  <title>Index</title>
</head>
<body>
  <?php require 'partials/nav.tpl.php'; ?>
  <h1>Index</h1>
  <form action="/user" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <button type="submit">Send</button>
  </form>
  <section>
    <h3>Users</h3>
    <ul>
      <?php foreach($users as $user): ?>
        <li><?= $user->name; ?></li>
      <?php endforeach; ?>
    </ul>
  </section>
</body>
</html>
