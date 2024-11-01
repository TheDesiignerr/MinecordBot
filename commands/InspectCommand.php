<?php

namespace Commands;

require_once 'database/getItem.php';
require_once 'database/setItem.php';
require_once 'database/eatItem.php';
require_once 'api/imageApi.php';
require_once 'api/colorApi.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class InspectCommand
{
    private $discord;

    public function __construct($discord)
    {
        $this->discord = $discord;
    }

    public function execute(Message $message) 
    {
        $content = strtolower(trim($message->content));
        $authorUsername = $message->author->username;

        if (preg_match('/^m.inspect\s+(\S+)/', $content, $matches)) {
            $itemName = strtolower($matches[1]);
            if (getItem($authorUsername, $itemName)) {
                $this->sendInspectEmbed($message, $authorUsername, $itemName);
            } else {
                $message->channel->sendMessage("You don't have any `$itemName` to inspect");
            }
        } else {
            $message->channel->sendMessage("Usage: `m.inspect <item_name>`");
        }
    }

    private function sendInspectEmbed(Message $message, $authorUsername, $itemName){
        $rand = rand(1, 100);
        
        if ($itemName === 'cactus') {
            if ($rand >= 30) {
                setItem($authorUsername, 'Water bucket');
                eatItem($authorUsername, ucfirst(strtolower($itemName)));

                $embed = new Embed($this->discord);
                $embed->setTitle("You found a Water bucket!");
                $embed->setImage(getImage('Water bucket'));
                $embed->setColor(getColor('Water bucket'));
                $message->channel->sendEmbed($embed);
            } else {
                $message->channel->sendMessage("You inspected $itemName and found nothing");
            }
        }

        if ($itemName === 'deadbush') {
            if ($rand >= 50) {
                setItem($authorUsername, 'Stick');
                eatItem($authorUsername, ucfirst(strtolower($itemName)));

                $embed = new Embed($this->discord);
                $embed->setTitle("You found a Stick!");
                $embed->setImage(getImage('Stick'));
                $embed->setColor(getColor('Stick'));
                $message->channel->sendEmbed($embed);
            } else {
                $message->channel->sendMessage("You inspected $itemName and found nothing");
            }
        }
    }
}