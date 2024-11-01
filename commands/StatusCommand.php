<?php

namespace Commands;

require_once 'database/validateUser.php';
require_once 'database/getTotalItems.php';
require_once 'database/getExp.php';
require_once 'api/emojiApi.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class StatusCommand
{
    private $discord;

    public function __construct($discord)
    {
        $this->discord = $discord;
    }

    public function execute(Message $message)
    {
        $authorUsername = $message->author->username;
        $pfpUrl = $message->author->avatar;

        if (validateUser($authorUsername)) {
            $message->channel->sendMessage("User not found in Database!");
        } else {
            $this->sendStatusEmbed($message, $authorUsername, $pfpUrl);
        }
    }

    private function sendStatusEmbed(Message $message, $authorUsername, $pfpUrl) {
        $embed = new Embed($this->discord);
        $embed->setTitle($authorUsername."'s status");
        $embed->setThumbnail($pfpUrl);
        $embed->addFieldValues("Minecord User Status\n",
        "**".getEmoji('blocks')."  Total Items ".getTotalItems($authorUsername)."x**\n".
        "**".getEmoji('orb')."  Exp ".getExp($authorUsername)."x**", true);
        $message->channel->sendEmbed($embed);
    }
}
