<?php

namespace Commands;

require_once 'database/checkCraft.php';
require_once 'database/createCraft.php';
require_once 'database/getItem.php';
require_once 'api/colorApi.php';
require_once 'api/imageApi.php';
require_once 'package/generateExp.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class CraftCommand
{
    private $discord;

    public function __construct($discord)
    {
        $this->discord = $discord;
    }

    public function execute(Message $message)
    {
        if (preg_match('/^m\.craft\s+(.+)/i', strtolower($message->content), $matches)) {
            $craftItem = trim(strtolower($matches[1])); // Trim whitespace
            $author = $message->author->username; // Get the author correctly

            // Check if valid craft id
            if ($this->validCraftId($craftItem)) {
                if ($this->hasMaterials($author, $craftItem)) {
                    $this->sendCraft($message, $author, $craftItem);
                    generateExp($message, $authorUsername);
                } else {
                    $message->channel->sendMessage("You don't have enough materials");
                }
            } else {
                $message->channel->sendMessage("You cannot craft `$craftItem`");
                $message->channel->sendMessage($this->craftableItems());
            }
        } else {
            $message->channel->sendMessage("Usage: `m.craft <item_name>`");
            $message->channel->sendMessage($this->craftableItems());
        }
    }

    private function validCraftId($craftItem) {
        $crafts = array(
            'crafting table',
            'furnace',
            'fishing rod',
            'wooden hoe',
            'bread'
        );

        return in_array($craftItem, $crafts);
    }

    private function hasMaterials($author, $craftItem) {
        if (checkCraft($author, $craftItem)) {
            return true;
        } else {
            return false;
        }
    }

    private function sendCraft(Message $message, $author, $craftItem) {
        if (in_array($craftItem, ['furnace', 'fishing rod', 'wooden hoe', 'bread'])) {
            if (getItem($author, 'Crafting table')) {
                createCraft($author, $craftItem);
                $embed = new Embed($this->discord);
                $embed->setTitle("You crafted a ".ucfirst(strtolower($craftItem))."!");
                $embed->setDescription("You can now craft more items!");
                $embed->setImage(getImage(ucfirst(strtolower($craftItem))));
                $embed->setColor(getColor(ucfirst(strtolower($craftItem))));
                $embed->setFooter("Crafted by ".$author);
                $message->channel->sendEmbed($embed);
            } else {
                $message->channel->sendMessage("You need a crafting table for that!");
            }
        } else {
            createCraft($author, $craftItem);
            $embed = new Embed($this->discord);
            $embed->setTitle("You crafted a ".ucfirst(strtolower($craftItem))."!");
            $embed->setDescription("You can now craft more items!");
            $embed->setImage(getImage(ucfirst(strtolower($craftItem))));
            $embed->setColor(getColor(ucfirst(strtolower($craftItem))));
            $embed->setFooter("Crafted by ".$author);
            $message->channel->sendEmbed($embed);
        }
    }

    private function craftableItems() {
        return "
        **Craftable items:**
        <:crafting_table:1298610906921701409> `Crafting table`
        <:furnace:1297611381931245573> `Furnace`
        <:fishing_rod:1297614225677750392> `Fishing rod`
        <:wooden_hoe:1298738623663050823> `Wooden hoe`
        <:bread:1298610895026389002> `Bread`
        ";
    }

    private function sendErrorEmbed(Message $message, $craftItem, $author) {
        // Implement error embed here
    }
}
