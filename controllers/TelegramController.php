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
            $text = 'Salom bu telegram rasmi';
            $this->sendPhoto($chat_id, $text, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/250px-Telegram_2019_Logo.svg.png');
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

    public function sendPhoto($chat_id, $text, $photo)
    {
        $data = [
            'chat_id' => $chat_id,
            'caption' => $text,
            'photo' => $photo,
            'parse_mode' => 'HTML'
        ];
        $url = "{$this->url}sendPhoto?" . http_build_query($data);

        file_get_contents($url);
    }
}