<?php

namespace controllers;

use Telegram\Bot\Api;

class TelegramController
{    public function bot()
    {
        $telegram = new Api('8297930277:AAEeX9D0hmwxJdlDu7wtVXQ0dpHGzqrbCAw');

        $updates = $telegram->getWebhookUpdate();
        $message = $updates->getMessage();
        $user = $message->getFrom();

        $user_id = $user->getId();                 // Telegram user ID
        $first_name = $user->getFirstName();       // Foydalanuvchi ismi
        $last_name = $user->getLastName();


        $telegram->sendMessage([
            'chat_id' => $user_id,
            'text' => 123
        ]);



    }
}