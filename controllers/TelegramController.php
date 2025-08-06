<?php

namespace controllers;

class TelegramController
{
    public function bot(){
        echo 'ok';
        $token = '8297930277:AAEeX9D0hmwxJdlDu7wtVXQ0dpHGzqrbCAw';
        $apiUrl = 'https://api.telegram.org/bot'.$token.'/';

        $update = file_get_contents("{$apiUrl}getUpdates");


        $updateArray = json_decode($update, true);

        $lastMessage = end($updateArray['result']);
        $chat_id = $lastMessage['message']['chat']['id'];
        $text = $lastMessage['message']['text'];


        $text = "Siz shu  xabarni yubordingiz: " . $text;

        $this->sendMessage("{$apiUrl}sendMessage", $chat_id, $text);
    }

    public function sendMessage($url, $chat_id, $message)
    {
        $data = [
            'chat_id' => $chat_id,
            'text' => $message,
        ];
        $url = $url.'?'.http_build_query($data);

        // Javob yuborish
        file_get_contents($url);
    }
}