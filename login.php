<?php
require 'db.php';
session_start();

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $stmt = $pdo->prepare("SELECT * FROM my_table WHERE name = ?");
  $stmt->execute([$_POST['name']]);
  $user = $stmt->fetch();

  if ($user && $user['password'] === $_POST['password']) {
    $_SESSION['user'] = $user['name'];
    header("Location: index.php");
    exit;
  } else {
    $error = "ログインに失敗しました。<a href='register.php'>登録はこちら</a>";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>ログイン</h2>
    <form method="POST">
      <input name="name" type="text" placeholder="ユーザー名" required>
      <input name="password" type="password" placeholder="パスワード" required>
      <button type="submit">ログイン</button>
    </form>

    <?php if ($error): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>
  </div>
</body>
</html>
