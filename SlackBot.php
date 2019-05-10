<?php
class SlackBotData{

    private $channel = "#問い合わせ";
    private $username = "DMC";
    private $icon_image_url = "";
    private $post_message = "";
    private $url = "";

    public function __construct($url = "", $message){
        $this->set_url($url);
        $this->set_message($message);
    }

    public function set_icon_image_url($image_url){
        $this->icon_image_url;
    }

    public function set_url($url){
        $this->url = $url;
    }

    public function set_message($message){
        $this->post_message = $message;
    }

    public function get_post_data(){

        return array(
            "url" => $this->url,
            "body" => array(
                "payload" => json_encode(array(
                    "channel" => $this->channel,
                    "username" => $this->username,
                    "icon_url" => $this->icon_image_url,
                    "text" => $this->post_message
                ))
            )
        );

    }

}

class SlackBot{

    //curlのオプションの設定
    protected function create_options($info){
        
        return array(
            CURLOPT_URL => $info["url"],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $info["body"],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true
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

        print $header;

        curl_close($ch);

        return array(
            "Header" => $header,
            "Result" => $result
        );
    }

    public function post_message($info){
        
        $options = $this->create_options($info->get_post_data());
        
        return $this->request($options); 
    }
}


?>