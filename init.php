<?php
$secret = 'letmein';

if ($_GET['key'] !== $secret) {
  exit('🔒 認証に失敗しました。URLに ?key=letmein を追加してください。');
}

$dsn = 'mysql:host=localhost;port=8889';
$user = 'root';
$pass = 'root';

try {
  $pdo = new PDO($dsn, $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec("CREATE DATABASE IF NOT EXISTS users CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
  $pdo->exec("USE users");

  $pdo->exec("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
  )");

  $pdo->exec("CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
  )");

   echo "✅ 初期化完了しました。ログインページへ移動します...";
   header("Location: login.php");
   exit;
} catch (PDOException $e) {
  echo "❌ エラー: " . htmlspecialchars($e->getMessage());
}
