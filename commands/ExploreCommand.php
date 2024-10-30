<?php

namespace Commands;

require_once 'api/colorApi.php';
require_once 'api/biomeApi.php';
require_once 'api/mineApi.php';
require_once 'database/getExp.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class ExploreCommand
{
    private $discord;

    public function __construct($discord) {
        $this->discord = $discord;
    }

    public function execute(Message $message, $authorUsername) {
        $content = strtolower(trim($message->content));

        // Check if command starts with 'm.explore'
        if (strpos($content, 'm.explore') === 0) {
            if ($this->validateExp($authorUsername)) {
                $message->channel->sendMessage("You can explore");
            } else {
                $message->channel->sendMessage("You need `300 Exp` to explore");
            }
        } else {
            $message->channel->sendMessage("Usage: `m.explore`");
        }
    }

    private function validateExp($authorUsername) {
        if (getExp($authorUsername) < 300) {
            return false;
        } else {
            return true;
        }
    }
}
