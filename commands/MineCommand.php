<?php
namespace Commands;

require_once 'api/mineApi.php';
require_once 'database/setItem.php';
require_once 'database/addUser.php';
require_once 'package/setLog.php';
require_once 'package/generateExp.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class MineCommand
{
    private $discord;

    public function __construct($discord)
    {
        $this->discord = $discord;
    }

    public function execute(Message $message)
    {
        if (!$this->droppedItem()) {
            $itemData = apiGet();
            $itemName = $itemData['itemName'];
            $authorUsername = $message->author->username;

            $this->sendDroppedItemEmbed($message, $authorUsername, $itemName);
        } else {
            $itemData = apiGet(); // Assume this function is defined elsewhere
            $embed = new Embed($this->discord);
            
            $authorUsername = $message->author->username; // Get the author's username
            $embed->setTitle($authorUsername . ' found a ' . $itemData['itemName'] . '!');
            $embed->setDescription($itemData['itemDesc']);
            $embed->setImage($itemData['itemImage']);
            $embed->setColor($itemData['itemColor']);
            $embed->setFooter($itemData['itemRarity']);
            $embed->setTimestamp(time());

            $message->channel->sendEmbed($embed);
            generateExp($message, $authorUsername);
            
            $itemName = $itemData['itemName'];
            setItem($authorUsername, $itemName); // Assume this function is defined elsewhere
            addUser($authorUsername);
            setLog("Mine command", "{$authorUsername} Requested a mine item");
            return;
        }
    }

    private function droppedItem() {
        if (rand(0, 100) >= 90) {
            return false;
        } else {
            return true;
        }
    }

    private function sendDroppedItemEmbed($message, $author, $itemName) {
        $embed = new Embed($this->discord);
        $embed->setTitle("$author found a $itemName but he dropped it");
        $embed->setDescription("I know $author, you must feel bad...");
        $message->channel->sendEmbed($embed);
    }
}