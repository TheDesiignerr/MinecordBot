<?php

namespace Commands;

require_once 'database/getItem.php'; // Adjust as needed
require_once 'database/getExp.php'; // Adjust as needed
require_once 'database/validateUser.php'; // Adjust as needed
require_once 'package/setLog.php'; // Adjust as needed

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class InvCommand
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

        if (preg_match('/^m.inv\s+(\S+)/', $content, $matches)) {
            $username = $matches[1];

            if (validateUser($username)) {
                $this->sendErrorEmbed($message, "This username is not in our database!", $authorUsername);
                setLog("Inventory command", "{$authorUsername} Tried viewing a non-existing inventory");
                return;
            } else {
                $embed = $this->createInventoryEmbed($username, $authorUsername);
                $message->channel->sendEmbed($embed);
                setLog("Inventory command", "{$authorUsername} Requested inventory successfully");
                return;
            }
        } else {
            if (validateUser($authorUsername)) {
                $this->sendErrorEmbed($message, "You are not in our database!", $authorUsername);
                setLog("Inventory command", "{$authorUsername} Tried viewing a non-existing inventory");
                return;
            } else {
                $embed = $this->createInventoryEmbed($authorUsername, $authorUsername);
                $message->channel->sendEmbed($embed);
                setLog("Inventory command", "{$authorUsername} Requested inventory successfully");
                return;
            }
        }
    }

    private function createInventoryEmbed($username, $authorUsername)
    {
        $embed = new Embed($this->discord);
        $embed->setTitle("$username's Inventory")
              ->setFooter('Requested by ' . $authorUsername)
              ->setTimestamp(time())
              ->setColor(0x212121);

              $embed->addFieldValues("<:blocks:1297308825594101771> ┆ Blocks", 
              "<:dirt:1296932147093049395> **`Dirt " . getItem($username, 'Dirt') . "x`**\n" .
              "<:dirt:1296932147093049395> **`Sand " . getItem($username, 'Sand') . "x`**\n" .
              "<:dirt:1296932147093049395> **`Cactus " . getItem($username, 'Cactus') . "x`**\n" .
              "<:cobblestone:1298610885199396884> **`Cobblestone " . getItem($username, 'Cobblestone') . "x`**\n" .
              "<:planks:1298738574765723758> **`Planks " . getItem($username, 'Planks') . "x`**\n" .
              "<:crafting_table:1298610906921701409> **`Crafting Table " . getItem($username, 'Crafting table') . "x`**\n" .
              "<:furnace:1297611381931245573> **`Furnace " . getItem($username, 'Furnace') . "x`**\n" .
              "<:iron:1296932191992807435> **`Iron " . getItem($username, 'Iron') . "x`**\n" .
              "<:gold:1296932202705326151> **`Gold " . getItem($username, 'Gold') . "x`**", true);

$embed->addFieldValues("<:tools:1297615557972983840> ┆ Tools", 
              "<:water_bucket:1298738776331522110> **`Water Bucket " . getItem($username, 'Water bucket') . "x`**\n" .
              "<:fishing_rod:1297614225677750392> **`Fishing Rod " . getItem($username, 'Fishing Rod') . "x`**\n" .
              "<:wooden_hoe:1298738623663050823> **`Wooden Hoe " . getItem($username, 'Wooden hoe') . "x`**", true);

$embed->addFieldValues("<:throwables:1298432758934278164> ┆ Throwables", 
              "<:egg:1298432769528959027> **`Egg " . getItem($username, 'Egg') . "x`**\n" .
              "<:snowball:1298432779075457125> **`Snowball " . getItem($username, 'Snowball') . "x`**\n" .
              "<:ender_pearl:1298738611575062598> **`Ender Pearl " . getItem($username, 'Ender pearl') . "x`**", true);

$embed->addFieldValues("<:ores:1297308834712522772> ┆ Ores & Misc", 
              "<:string:1298738589689057342> **`String " . getItem($username, 'String') . "x`**\n" .
              "<:stick:1298738600233668618> **`Stick " . getItem($username, 'Stick') . "x`**\n" .
              "<:coal:1296932179363889153> **`Coal " . getItem($username, 'Coal') . "x`**\n" .
              "<:iron_ingot:1297609994300293261> **`Iron Ingot " . getItem($username, 'Iron Ingot') . "x`**\n" .
              "<:gold_ingot:1297610005335379988> **`Gold Ingot " . getItem($username, 'Gold Ingot') . "x`**\n" .
              "<:diamond:1296932213941866589> **`Diamond " . getItem($username, 'Diamond') . "x`**", true);

$embed->addFieldValues("<:fish:1297691173376495716> ┆ Food", 
              "<:cod:1297690524043575297> **`Cod " . getItem($username, 'Cod') . "x`**\n" .
              "<:salmon:1297690513717071943> **`Salmon " . getItem($username, 'Salmon') . "x`**\n" .
              "<:pufferfish:1297690503462125628> **`Pufferfish " . getItem($username, 'Pufferfish') . "x`**\n" .
              "<:cooked_cod:1297699673234083900> **`Cooked Cod " . getItem($username, 'Cooked cod') . "x`**\n" .
              "<:cooked_salmon:1297699662756577371> **`Cooked Salmon " . getItem($username, 'Cooked salmon') . "x`**\n" .
              "<:apple:1297717800403603557> **`Apple " . getItem($username, 'Apple') . "x`**\n" .
              "<:sweet_berries:1297717790068707329> **`Sweet Berries " . getItem($username, 'Sweet berries') . "x`**\n" .
              "<:cake:1297312328093663292> **`Cake " . getItem($username, 'Cake') . "x`**", true);

$embed->addFieldValues("<:wheat:1298738689895038996> ┆ Farming", 
"<:poisonus_potato:1298738732727402589> **`Bone " . getItem($username, 'Bone') . "x`**\n" .
              "<:wheat:1298738689895038996> **`Wheat " . getItem($username, 'Wheat') . "x`**\n" .
              "<:bread:1298610895026389002> **`Bread " . getItem($username, 'Bread') . "x`**\n" .
              "<:potato:1298738704348614777> **`Potato " . getItem($username, 'Potato') . "x`**\n" .
              "<:cooked_potato:1298738722229063680> **`Cooked Potato " . getItem($username, 'Cooked potato') . "x`**\n" .
              "<:poisonus_potato:1298738732727402589> **`Poisonous Potato " . getItem($username, 'Poisonous potato') . "x`**\n" .
              "<:carrot:1298738812012331089> **`Carrot " . getItem($username, 'Carrot') . "x`**", true);

$embed->addFieldValues("<:obtainables:1297308843684139039> ┆ Obtainables", 
              "<:poppy:1296954406859964446> **`Poppy " . getItem($username, 'Poppy') . "x`**\n" .
              "<:daisy:1297313939004199004> **`Daisy " . getItem($username, 'Daisy') . "x`**\n" .
              "<:orb:1300200337935695992> **`Deadbush " . getItem($username, 'Deadbush') . "x`**", true);

        return $embed;
    }

    private function sendErrorEmbed(Message $message, $errorMessage, $authorUsername)
    {
        $embed = new Embed($this->discord);
        $embed->setTitle("Error!")
              ->setDescription($errorMessage)
              ->setFooter('Requested by ' . $authorUsername)
              ->setTimestamp(time())
              ->setColor(0xff0000)
              ->setImage(getImage('ERR'));
        $message->channel->sendEmbed($embed);
    }
}
