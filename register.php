<?php
require 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
  $pass = $_POST['password'];
  $stmt = $pdo->prepare("INSERT INTO my_table (name, password) VALUES (?, ?)");
  $stmt->execute([$name, $pass]);
  $_SESSION['user'] = $name;
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="ja"> 
<head>
  <meta charset="UTF-8">
  <title>登録する</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h2>登録する</h2>
<form method="POST">
  名前: <input type="text"  name="name"><br>
  パスワード: <input name="password" type="password"><br>
  <button>登録</button>
</form>
</div>
</div>
</body>
</html>
