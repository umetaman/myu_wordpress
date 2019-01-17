<?php
    //テーマについて
    add_theme_support("title-tag");
    //HTML5対応
    add_theme_support("html5", array(
        "gallery", "caption"
    ));
    //Feedリンクの自動生成
    add_theme_support("automatic-feed-links");
    //アイキャッチ画像を有効に
    add_theme_support("post-thumbnails");

    //カスタムメニューを有効に
    register_nav_menu("header-nav", "ヘッダーナビゲーション");
    register_nav_menu("footer-nav", "フッターナビゲーション");

    //メニューボタン
    //WordPressにJavaScriptを組み込む
    function navbutton_scripts(){
        //スクリプトファイルの重複防止
        wp_enqueue_script(
            "navbutton_script",                    //スクリプトを識別する値
            get_template_directory_uri()."/js/navbutton.js", //スクリプトへの絶対パス
            array("jquery") //依存しているスクリプト
        );
    }
    add_action("wp_enqueue_scripts", "navbutton_scripts");


    //ヘッダーウィジェットの追加
    register_sidebar(array(
        "name" => "メインウィジェット",
        "id" => "main-info",
        "before_widget" => '<div class="main-widget">',
        "after_widget" => '</div>',
        "before_title" => '<h2 class="main-widget-title">',
        "after_title" => '</h2>'
    ));
?>