<?php

namespace Commands;

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class UpdatesCommand
{
    private $discord;

    public function __construct($discord)
    {
        $this->discord = $discord; // Initialize the discord property
    }

    public function execute(Message $message)
    {
        $content = strtolower(trim($message->content));
        $authorUser = $message->author->username;

        if ($content === 'm.updates') {
            $this->sendUpdatesEmbed($message);
        } else {
            $message->channel->sendMessage("`Something went wrong`");
        }
    }

    public function sendUpdatesEmbed(Message $message) {
        $embed = new Embed($this->discord); // Now $this->discord is initialized
        $embed->setTitle("Updates log");
        $embed->setDescription("
        **╭ Version v1.2**
            ⊦ *Added New Item <:snowball:1298432779075457125> (Snowball)*
            ⊦ *Added New Item <:egg:1298432769528959027> (Egg)*
            ⊦ *Added New Command (mthrow)*
            ╰ *New Rolling algorithm*

        **╭ Version v1.3**
            ⊦ *New command `m.craft` <:crafting_table:1298610906921701409>*
            ⊦ *New command `m.farm` <:wheat:1298738689895038996>*
            ⊦ *New items in `m.fish`*
            ⊦ *New item `Ender pearl` <:ender_pearl:1298738611575062598> soon for m.travel*
            ⊦ *New item `Water bucket` <:water_bucket:1298738776331522110>*
            ⊦ *New item `Planks` <:planks:1298738574765723758>*
            ⊦ *New item `Stick` <:stick:1298738600233668618>*
            ⊦ *New item `String` <:string:1298738589689057342
            
            >*
            ⊦ *New item `Crafting table` <:crafting_table:1298610906921701409>*
            ⊦ *New item `Wooden hoe` <:wooden_hoe:1298738623663050823>*
            ╰ *New api `colorApi` for item embed colors*

        
            **╭ Coming soon**
            ⊦ *Travel*
            ⊦ *Axe*
            ⊦ *Health*
            ⊦ *Hunger*
            ╰ *Swords*
        ");

        $message->channel->sendEmbed($embed); // Send the embed message
    }
}
