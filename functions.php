<?php
    require("MyuLatestPosts.php");

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

    //Stickyヘッダー
    function sticky_scripts(){
        wp_enqueue_script(
            "sticky_script",
            get_template_directory_uri()."/js/sticky.js",
            array("jquery")
        );
    }
    add_action("wp_enqueue_scripts", "sticky_scripts");
    
    function myu_widgets_init() {

        register_sidebar( array(
            'name' => 'MYU Main Widgets',
            'id' => 'myu-main-widgets',
            'before_widget' => '<div class="myu-main-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="myu-main-widget-title">',
            'after_title' => '</h2>',
        ));

        register_widget('MyuLatestPosts');
    }
    add_action( 'widgets_init', 'myu_widgets_init' );

?>