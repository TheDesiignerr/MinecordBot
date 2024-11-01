<?php

namespace Commands;

require_once 'api/colorApi.php';
require_once 'api/biomeApi.php';
require_once 'api/emojiApi.php';
require_once 'database/getExp.php';
require_once 'database/getItem.php';
require_once 'database/eatItem.php';
require_once 'database/addItem.php';

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
                if (getItem($authorUsername, 'Ender pearl') > 0) {
                    $this->sendExploreEmbed($message, $authorUsername);
                    eatItem($authorUsername, 'Ender pearl');
                } else {
                    $message->channel->sendMessage("You don't have enough ender pearls");
                }
            } else {
                $message->channel->sendMessage("You need `500 Exp` to explore");
            }
        } else {
            $message->channel->sendMessage("Usage: `m.explore`");
        }
    }

    private function validateExp($authorUsername) {
        if (getExp($authorUsername) < 500) {
            return false;
        } else {
            return true;
        }
    }

    private function generateBiomeItem($biomeName ,$authorUsername) {
        $biomeItemData = getBiomeItems($biomeName);
        $biomeItemName = $biomeItemData['selectedItem'];
        $biomeItemAmount = $biomeItemData['selectedAmount'];

        addItem($authorUsername, ucfirst(strtolower($biomeItemName)), $biomeItemAmount);
        $itemDetails = $biomeItemAmount."x"."".getEmoji($biomeItemName)."";
        return $itemDetails;
    }

    private function sendExploreEmbed(Message $message, $authorUsername) {
        $biomeData = getBiome();
        $biomeName = $biomeData['biomeName'];
        $biomeImage = $biomeData['biomeImage'];

        

        $embed = new Embed($this->discord);
        $embed->setTitle("$authorUsername explored a $biomeName biome!");
        $embed->setImage($biomeImage);
        $embed->setDescription("
        You found:\n
            ".$this->generateBiomeItem($biomeName, $authorUsername)."
            ".$this->generateBiomeItem($biomeName, $authorUsername)."
            ".$this->generateBiomeItem($biomeName, $authorUsername)."
            ".$this->generateBiomeItem($biomeName, $authorUsername)."
            ".$this->generateBiomeItem($biomeName, $authorUsername)."
        ");
        $message->channel->sendEmbed($embed);
    }
}
