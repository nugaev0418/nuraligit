<?php

namespace controllers;

class TelegramController
{
    public function bot(){


        $token = '8462375190:AAF7Jzqrc6p5zoRCfZgTOPzGLVAfF-JcVek';
        $apiUrl = 'https://api.telegram.org/bot'.$token.'/';

// Telegramdan kelgan JSON ma'lumotni o'qiymiz
        $update = json_decode(file_get_contents("php://input"), true);

// Agar ma'lumot bo'sh bo'lsa, chiqamiz
        if (!$update) {
            exit;
        }

// Kerakli ma'lumotlarni ajratib olamiz
        $chat_id = $update["message"]["chat"]["id"];
        $text = $update["message"]["text"];

// Javob yozamiz
        $reply = "Salom! Siz yozdingiz: $text";

// URL tayyorlaymiz


// Ma'lumotni jo'natamiz
        curl_setopt_array($ch = curl_init(), [
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                'chat_id' => $chat_id,
                'text' => $reply,
                'parse_mode' => 'HTML'
            ]
        ]);

        $response = curl_exec($ch);
        curl_close($ch);


    }
}