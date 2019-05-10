<?php
class SlackBotData{

    public $channel = "#問い合わせ"
    public $username = "Data&MediaCommons"
    public $icon_image_url = get_template_directory_uri()."/images/"

}
?>

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
    
    function myu_widgets_init() {

        register_sidebar( array(
            'name' => 'MYU Main Widgets',
            'id' => 'myu-main-widgets',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="myu-main-widget-title">',
            'after_title' => '</h2>',
        ));
    }
    add_action( 'widgets_init', 'myu_widgets_init' );

    /*
    フォームの内容をSlackへ送信する
    依存プラグイン -> ContactForm7
    */
    function send_to_slack($cf7){
        
    }
    
    add_action("wpcf7_after_send_mail", "send_to_slack");


    /*
    MYU Latest Post
    最新の記事を表示する。
    本家WordPressの機能の拡張
    */

    wp_register_sidebar_widget(
        'myu_latest_post_widget', 
        'MYU Latest Post',
        'myu_latest_post_display', 
        array(
            'description' => '最新の記事を表示する。WordPress標準のものでは足りないので作った。'
        ));
    
?>