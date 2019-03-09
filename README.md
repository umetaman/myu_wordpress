# MYU WordPress
宮城大学データ＆メディアコモンズのWebサイト用のWordPressテーマです。

## 開発環境
- WordPress version5.0.3
  - https://ja.wordpress.org/download/
  - ClassicEditorが個人的に嫌なので、新しいGutenbergEditorを使う。
  - GutenbergもCSSが不十分なので、独自に拡張していく。
- FontAwesome version5.6.3
  - https://fontawesome.com/
  - フリーのアイコンフォント。
- XAMPP(v3.2.2)
  - 本番の環境(dmc.myu.ac.jp)を汚したくないので、ローカルで作業してから、引っ越す。
- Webブラウザー
  - Firefox(Developer Edition)
  - Google Chrome
- p5.js
  - https://p5js.org/
  - Webで動くProcessingのようなもの。Canvas要素にレンダリングする。
  - そこそこ高機能。DOMも動かせる。
  - Firefoxだとほぼ静止画。
  - どこかのサーバーに上げて、iframeで埋め込む。

## 開発について補足
- Internet ExplorerとMicrosoft Edgeではあまり検証しない。
  - IEはこれから置き去りにされていく。
    - https://webrage.jp/techblog/pc_browser_share/
  - EdgeはChromiumベースになることが確定。
    - http://www.itmedia.co.jp/pcuser/articles/1812/09/news016.html
- SafariはDMCの誰かに期待する。

## 追加する拡張機能
- Contact Form 7
  - https://ja.wordpress.org/plugins/contact-form-7/
  - Webからの投稿用。
    - 問い合わせ（トラブルについて、学生運営委員への応募など）
    - ワークショップ開催の申し込み
    - 目安箱
  - 投稿内容はWebhookしてSlackに送信する。
  - CSVかデータベースに記録してまとめて出力する。
- The Events Calender
  - https://ja.wordpress.org/plugins/the-events-calendar/
  - ワークショップの日付を掲載。イベント内容の詳細の告知
  - 専用ページとは別に、このプラグインから直近のイベントを取得して、トップページに掲載する。
  - 操作するのは、運営委員のみ。
  - イベント設定 -> ディスプレイ -> イベントテンプレートは、必ず「デフォルトイベントテンプレート」とすること。
  - Export機能はつけない。
    - CSS非表示にする。
- Duplicate Post
  - https://ja.wordpress.org/plugins/duplicate-post/
  - 固定ページを複製する。
- WP Multibyte Patch
  - https://ja.wordpress.org/plugins/wp-multibyte-patch/
  - マルチバイト機能の拡張。
  - 今は不要という噂もある。
- All in One WP Migration
  - https://ja.wordpress.org/plugins/all-in-one-wp-migration/
  - WordPressをデータベースの内容ごと引っ越しする。
  - ただし、データベースがめちゃくちゃになるので、ほとんど最終手段。

## サイトマップ
- グローバルナビゲーション
  - DMCとは？
  - 利用案内
  - 問い合わせ
  - イベントカレンダー
- トップページ
  - 新着情報
    - 最新の記事
    - 最新のイベント
  - データ＆メディアコモンズとは？
    - マップ
    - オープンスタディ
    - デジタルリサーチ
    - メディアシアター
    - サポートオフィス
  - 利用案内
    - 利用時間について
    - 注意事項
  - 利用上の注意
    - マナーと節度のある利用
    - 分からないときはスタッフへ
    - 飲食について
    - 使ったものは元の場所へ
  - 学生による勉強会/ワークショップをサポートします！
    - 開催の申し込み
    - イベントカレンダー
  - 問い合わせ
    - 問い合わせフォーム
      - 名前
      - メールアドレス
      - 件名
      - メッセージ本文
    - 学生運営委員を募集中
- ワークショップ申し込みページ
  - ワークショップを開催してみましょう！
    - なんかいい文章
    - ワークショップスペースの写真
  - 利用案内
    - 使用可能な設備
    - 開催可能な人数
    - 注意事項
      - 大人数の利用について
      - 利用する場所について
  - 申し込みフォーム
    - 代表者の氏名、連絡先
    - 開催予定日時
    - ワークショップのタイトル
    - 概要
    - 使用する設備について
- イベントカレンダー
  - カレンダー

## 個人的なメモ
- https://plusers.net/wordpress_theme_0
- これからのCSSレイアウトはFlexbox
  - https://www.webcreatorbox.com/tech/flexbox

## index.phpについて
WordPressにおけるindex.phpファイルは、通常のWebサイトのindex(*.php, *.html)とは違う。

- front-page.phpとかsingle.phpとかが存在しないとき、最終的にたどり着く。
- テーマを構成するファイルに必須である。