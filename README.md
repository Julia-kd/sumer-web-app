# Summer Web App - PHP SNS Mini Project

このプロジェクトは、PHP を使用したミニソーシャルネットワークアプリです。
Truth Social風デザインで、ユーザー登録、ログイン、投稿ができます。

---

## 📦 機能一覧

- ユーザー登録
- ログイン／ログアウト
- 投稿の作成と表示
- セッションによる認証管理
- ダークテーマ + 背景画像 + フィード風UI
- データベース連携（PDO）

---

## 🛠 使用技術

- PHP 7+
- MySQL
- HTML5 / CSS3
- Session / PDO
- MAMP または XAMPP

---

## 🗂 ディレクトリ構成

```
project/
├── db.php               # データベース接続
├── login.php            # ログイン画面
├── register.php         # 新規登録画面
├── index.php            # ログイン後の投稿ページ
├── logout.php           # ログアウト処理
├── style.css            # 共通スタイル（Truth Social風）
├── bg.jpg               # 背景画像（任意）
├── init.php             # 初期化スクリプト（安全キー付き）
└── README.md
```

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

## 🎨 デザインテーマ

Truth Social を参考にした、モダンで読みやすい UI:

- 背景画像（`bg.jpg`）付き黒背景
- フォームは半透明のバイオレット
- 入力欄とボタンは角丸、ホバー効果あり

背景画像は `style.css` の `body` にて `bg.jpg` を指定しています。
好きな画像に差し替えてお使いください。

---

## 📄 ライセンス

MIT ライセンス（自由に改変／利用可能）
