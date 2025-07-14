<?php
require 'db.php';
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $stmt = $pdo->prepare("INSERT INTO posts (user, content) VALUES (?, ?)");
  $stmt->execute([$_SESSION['user'], $_POST['content']]);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ホーム</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>ようこそ, { <?= htmlspecialchars($_SESSION['user']) ?> } さん!</h2>
    <div class="top-actions">
      <a class="logout" href="logout.php">ログアウト</a>
    </div>

    <form method="POST">
      <textarea name="content" placeholder="いまどうしてる？" required></textarea>
      <button>投稿</button>
    </form>

    <hr>

    <div class="posts">
      <?php
      $posts = $pdo->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
      foreach ($posts as $post):
      ?>
        <div class="post">
          <p><strong><?= htmlspecialchars($post['user']) ?></strong>:</p>
          <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>