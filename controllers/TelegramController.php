<?php

namespace controllers;

class TelegramController
{
    public $url;
    public function __construct()
    {
        $token = '8297930277:AAEeX9D0hmwxJdlDu7wtVXQ0dpHGzqrbCAw';
        $this->url = 'https://api.telegram.org/bot' . $token . '/';
    }

    public function bot()
    {



        $content = file_get_contents("php://input");
        $update = json_decode($content, true);


        // Xabar tafsilotlari
        $chat_id = $update['message']['chat']['id'] ?? null;
        $text = $update['message']['text'] ?? '';

        // Javob yuborish
        if ($chat_id && $text) {
            $reply = '<a href="tg://user?id=3673579">Sardor Nugaev</a>';
            $this->sendMessage($chat_id, $reply);

            $this->sendMessage($chat_id, 'Bu ikkinchi message');
        }
    }

    public function sendMessage($chat_id, $text)
    {
        $data = [
            'chat_id' => $chat_id,
            'text' => $text,
            'parse_mode' => 'HTML'
        ];
        $url = "{$this->url}sendMessage?" . http_build_query($data);

        file_get_contents($url);
    }
}