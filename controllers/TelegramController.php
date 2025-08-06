<?php

namespace controllers;

use Telegram\Bot\Api;

class TelegramController
{    public function bot()
    {
        $telegram = new Api('8297930277:AAEeX9D0hmwxJdlDu7wtVXQ0dpHGzqrbCAw');

        // Example usage
        $response = $telegram->getMe();
    }
}