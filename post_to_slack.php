<?php

include_once __DIR__.'/SlackBot.php';

// 引数チェック
if ($argc < 2) {
    exit('引数にポストしたいメッセージを指定してください');
}
$message = $argv[1];

// WebhookのURL
$url = 'https://hooks.slack.com/services/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';
// メッセージをポスト
$bot = new SlackBot();
print_r($bot->post_message(new SlackBotData($url, $message)));