<?php
class SlackBotData{

    private $channel = "#問い合わせ";
    private $username = "Data&MediaCommons";
    private $icon_image_url = get_template_directory_uri()."/images/dmc_icon.jpg";
    private $post_message = "";
    private $url = "";

    public function __construct($url = "", $message){
        $this->set_url($url);
        $this->set_message($message);
    }

    public function set_url($url){
        $this->url = $url;
    }

    public function set_message($message){
        $this->post_message = $message;
    }

    public function get_post_data(){

        $payload = array(
            "payload" => json_encode(array(
                "channel" => $this->channel,
                "username" => $this->username,
                "icon_image" => $this->icon_image_url,
                "text" => $this->post_message
            ))
        );

        return array(
            "url" => $this->url;
            "body" => $payload;
        );

    }

}

class SlackBot{

    //curlのオプションの設定
    protected function create_option($info){
        
        return array(
            CURL_URL => $info["url"],
            CURL_POST => true,
            CURL_POSTFIELDS => $info["body"],
            CURL_RETURNTRANSFER => true,
            CURL_HEADER => true
        );

    }

    protected function request($options){
        
        $ch = curl_init();

        //curlのオプションの設定
        curl_setopt_array($ch, $options);
        // curlの実行結果
        $result = curl_exec($ch);
        
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($result, 0, $header_size);
        $result = substr($result, $header_size);

        curl_close($ch);

        return array(
            "Header" => $header,
            "Result" => $result
        );
    }

    public function post_message($info){
        
        $option = $this->create_option($info->get_post_data());
        
        return $this->request($option); 
    }
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