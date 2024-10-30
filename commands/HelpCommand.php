<?php

namespace Commands;

require_once 'database/getTotalUsers.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class HelpCommand
{
    private $discord;

    public function __construct($discord)
    {
        $this->discord = $discord;
    }

    public function execute(Message $message, $authorUsername)
    {
        if (in_array(strtolower(trim($message->content)), ['chelp', 'ch', 'm.help', 'm.h'])) {
            $this->sendHelpEmbed($message, $authorUsername);
        }
    }

    private function sendHelpEmbed(Message $message, $authorUsername)
    {
        $embed = new Embed($this->discord);
        $embed->setTitle("Bot Commands")
              ->setDescription("**Your Go-To Bot Commands Guide**")
              ->setFooter('Requested by ' . $authorUsername)
              ->setTimestamp(time())
              ->setColor(0x1c1c1c);

        $embed->addFieldValues("Bot Prefix",
            "**`m.`**\n*Example: m.help*", true);

        $embed->addFieldValues(":pick: Mine Items",
            "**`m.mine`**\n*Mine a random block.*\n**Hey {$authorUsername}, get started using this command! :up_arrow:**", true);

        $embed->addFieldValues(":backpack: Check Status",
            "**`m.inv`**\n**`m.inv {user}`**\n*Example: `m.inv desiignerr`*", true);

        $embed->addFieldValues(":palm_up_hand: Give Items",
            "**`m.give`**\n**`m.give {user} {item_name} {amount}`**\n*Example: `m.give desiignerr poppy 6`*", true);

        $embed->addFieldValues("<:furnace:1297611381931245573> Furnace Commands",
            "**`m.smelt`**\n**`m.smelt {item_name} {amount}`**\n*Example: `m.smelt iron 5`*\n**`m.cook`**\n**`m.cook {item_name} {amount}`**\n*Example: `m.cook salmon 7`*", true);

        $embed->addFieldValues("<:fishing_rod:1297614225677750392> Fishing Rod Commands",
            "**`m.fish`**\n*Use the fishing rod item.*", true);

        $embed->addFieldValues("<:throwables:1298432758934278164> Throwable Item Commands",
            "**`m.throw`**\n**`m.throw {item_name} {at_username}`**\n*Example: `m.throw snowball desiignerr`*", true);

        $embed->addFieldValues(":apple: Eating",
            "**`m.eat`**\n**`m.eat {item_name}`**\n*Example: `m.eat salmon`*", true);

        $embed->addFieldValues("<:crafting_table:1298610906921701409> Crafting",
            "**`m.craft`**\n**`m.craft {item_name}`**\n*Example: `m.craft fishing rod`*", true);

        $embed->addFieldValues("<:wooden_hoe:1298738623663050823> Farming",
            "**`m.farm`**\n*Usage: `You need hoe and water bucket`*", true);

        $embed->addFieldValues(":dizzy: Bot Support",
            "**`m.link`**\n*Bot invite link*\n**`m.updates`**\n*Updates log*", true);

        $embed->addFieldValues(":memo: Credits",
            "**`Bot Developer`** @desiignerr\n**`Bot Language`** PHP\n**`Bot Version`** v1.3 Beta\n**`Current Users`** " . $this->loadUsers() . "\n**`Hosting by`** Luny Hosting\n*More updates soon!*", true);

        $message->channel->sendEmbed($embed);
    }

    public function loadUsers() 
    {
        $userCount = \getTotalUsers(); // Use the global namespace
        return $userCount;
    }
}
