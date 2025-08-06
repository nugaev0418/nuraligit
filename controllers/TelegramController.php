<?php

namespace controllers;

class TelegramController
{
    public function bot()
    {

        $token = '8297930277:AAEeX9D0hmwxJdlDu7wtVXQ0dpHGzqrbCAw';
        $apiUrl = 'https://api.telegram.org/bot' . $token . '/';

        $content = file_get_contents("php://input");
        $update = json_decode($content, true);


        // Xabar tafsilotlari
        $chat_id = $update['message']['chat']['id'] ?? null;
        $text = $update['message']['text'] ?? '';

        // Javob yuborish
        if ($chat_id && $text) {
            $reply = "*Siz yozdingiz:* " . $text;
            file_get_contents("{$apiUrl}sendMessage?chat_id=$chat_id&parse_mode=MarkdownV2&text=" . urlencode($reply));
        }
    }
}