# Summer Web App - PHP SNS Mini Project

このプロジェクトは、PHP を使用したミニソーシャルネットワークアプリです。
Truth Social風デザインで、ユーザー登録、ログイン、投稿ができます。

---

## 🛠 使用技術

- PHP 7+
- MySQL
- HTML5 / CSS3
- Session / PDO
- MAMP または XAMPP

---

## 💻 ローカル環境でのセットアップ方法

### 🔧 前提条件

- MAMP または XAMPP がインストールされていること
- PHP 7.x 以上 / MySQL が動作する環境

### 📥 手順

1. このリポジトリをダウンロードまたはクローン：

```bash
git clone git@github.com:Julia-kd/sumer-web-app.git
```

2. プロジェクトを `htdocs`（MAMP）または `www`（XAMPP）に配置：

```
MAMP: /Applications/MAMP/htdocs/summer-web-app
XAMPP: C:\\xampp\\htdocs\\summer-web-app
```

3. MAMP または XAMPP を起動し、MySQL を有効にします。

4. 初期化スクリプトを1度だけ実行：

```
http://localhost/summer-web-app/init.php?key=letmein
```

> 完了後は `init.php` を削除または無効化してください。

5. ブラウザでログインページを開く：

```
http://localhost/summer-web-app/login.php
```

---

MIT ライセンス（自由に改変／利用可能）
