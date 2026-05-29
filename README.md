# YNU Neutrino Group Website

横浜国立大学 南野・Bronner研究室の公式Webサイトのソースコードです。
本リポジトリでは、サイトのHTML/PHP/CSSおよび各種コンテンツを管理しています。

---

## 1. ディレクトリ構成

```
.
├── ja/              # 日本語ページ
├── en/              # 英語ページ
├── includes/        # 共通テンプレート
├── header.php       # ヘッダー共通部品
├── footer.php       # フッター共通部品
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

本サイトはPHPによる簡易テンプレート構成を採用しています。

### 共通部品

* `includes/head.php` : `<head>`要素
* `header.php` : ナビゲーション・タイトル
* `footer.php` : フッター

### 各ページの基本構造

```php
<?php
$lang = 'ja'; // または 'en'
$title = 'ページタイトル';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<!-- コンテンツ -->
```

---

## 3. パスのルール

本サイトでは以下を原則とします：

* CSS / 画像など → **絶対パス**

  ```
  /style.css
  /img/sample.jpg
  ```

* PHP include → **DOCUMENT_ROOT基準**

  ```php
  include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
  ```

これにより、ディレクトリ構造変更時の不具合を防ぎます。

---

## 4. 編集方法

1. ローカル環境の好きな場所（例：~/lab_HP）にリポジトリをclone
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

## 5. ローカルでの動作確認（PHPサーバー）

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

## 6. 公開Webサイトへの反映方法

### ‼️公開前に必ずローカル環境での動作確認を行ってください。‼️

1. YNUのサーバーにssh接続（接続方法は、平田まで問い合わせてください。）
2. ./update_HP.shを実行


