<?php 

class SlackBot{

    private $channel = '#general';
    private $username = 'user';
    private $icon_url = '';
    private $text = '';
    private $hook_url = '';
    
    public function __construct($url = '', $message = ''){
        
        $this->set_hook_url($url);
        $this->set_message($message);

    }

    public function set_channel($channel){
        $this->channel = $channel;
    }

    public function set_username($username){
        $this->username = $username;
    }

    public function set_icon_url($icon_url){
        $this->icon_url = $icon_url;
    }

    public function set_message($message){
        $this->text = $message;
    }

    public function set_hook_url($hook_url){
        $this->hook_url = $hook_url;
    }

    private function get_data(){

        return array(
            'payload' => json_encode(array(
                'channel' => $this->channel,
                'username' => $this->username,
                'icon_url' => $this->icon_url,
                'text' => $this->text
            ))
            );

    }

    public function send_message(){

        // curlセッションの初期化
        $ch = curl_init();

        // 送信するデータ
        $data = $this->get_data();

        // URLとオプションの設定
        curl_setopt($ch, CURLOPT_URL, $this->hook_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        // curlの実行
        curl_exec($ch);

        // セッションの終了
        curl_close($ch);

    }
}
?>