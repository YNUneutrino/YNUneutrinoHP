# YNU Neutrino Group Website

横浜国立大学 南野・Bronner研究室の[公式Webサイト](https://neutrino.ynu.ac.jp/)のソースコードです。
本リポジトリでは、サイトのHTML/PHP/CSSおよび各種コンテンツを管理しています。

---

## 1. ディレクトリ構成

```
.
├── ja/              # 日本語ページ
├── en/              # 英語ページ
├── includes/        # 共通テンプレート
├── data/            # データベース
├── img/             # 画像ファイル
├── documents/       # 資料（PDFなど）
├── style.css        # 共通スタイル
├── index.php        # ルート
├── thesis/          # 学位論文PDF（重いので、git管理していません。YNUのサーバー上には存在しており、その前提でコードを書いています。）
└── README.md
```

### 言語構成

* `/ja/` : 日本語ページ
* `/en/` : 英語ページ

各ディレクトリ内は基本的に同一構造になっています：

```
research/
members/
publications/
news/
...
```

---

## 2. テンプレート構成

本サイトは PHP によるシンプルなテンプレート構成を採用しています。
共通部分を `includes/` に分離し、各ページではコンテンツのみを記述します。

### 共通部品

* `includes/head.php`
  HTMLの開始部分（`<!DOCTYPE>`, `<html>`, `<head>`, `<body>`）を定義

* `includes/header.php`
  サイト共通のヘッダー（ナビゲーション・タイトル）

* `includes/footer.php`
  フッターの表示内容（住所・コピーライト等）

* `includes/foot.php`
  HTMLの終了部分（`</body>`, `</html>`）

---

### 各ページの基本構造

各ページでは以下の順序で読み込みを行います。

```php
<?php
$lang = 'ja'; // または 'en'
$title = 'ページタイトル';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<div id="main">

  <!-- HEADER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- MAIN CONTENT -->
  <!-- 各ページ固有の内容をここに記述 -->

  <!-- FOOTER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'; ?>
```

---

### 注意事項

* `head.php` で `<body>` が開始され、`foot.php` で終了します
* `footer.php` には `</body>` や `</html>` を含めないでください
* HTML構造を崩さないため、includeの順序は必ず守ってください

---

### 設計方針

* 共通レイアウトとコンテンツを分離することで保守性を向上させています
* 小規模サイト向けの軽量構成であり、フレームワークは使用していません

---

## 3. 編集方法

1. ローカル環境の好きな場所（例：`~/lab_HP`）にリポジトリをclone
2. 自分用のブランチを作成
3. ファイルを編集
4. 変更をcommit
5. リモートリポジトリにpush
6. Pull Requestを作成（または管理者がmerge）

### 例
```bash
# クローン
git clone https://github.com/YNUneutrino/YNUneutrinoHP ~/lab_HP
cd ~/lab_HP

# ブランチ作成
git checkout -b feature/<名前>

# コードを編集する

# 変更を記録
git add .
git commit -m "membersページに新メンバーを追加"

# リモートにpush
git push origin feature/<名前>
```

---

## 4. ローカルでの動作確認（PHPサーバー）

本サイトはPHPを使用しているため、ブラウザで直接ファイルを開く（`file://`）だけでは正しく動作しません。
ローカルで確認する場合は、簡易PHPサーバーを起動してください。

### 手順

1. リポジトリのディレクトリに移動

```bash
cd ~/lab_HP
```

2. PHPのビルトインサーバーを起動

```bash
php -S localhost:8000
```

3. ブラウザでアクセス

```id="url_example"
http://localhost:8000
```

### 補足（ポート変更）

8000番が使えない場合：

```bash
php -S localhost:8080
```

### 終了方法

```bash
Ctrl + C
```

---

## 5. 公開Webサイトへの反映方法

### ‼️公開前に必ずローカル環境での動作確認を行ってください。‼️

1. YNUのサーバーにssh接続（接続方法は、平田まで問い合わせてください。）
2. `~/update_HP.sh`を実行
