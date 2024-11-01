<?php
namespace Commands;

require_once 'api/fishApi.php';
require_once 'api/imageApi.php';
require_once 'database/setItem.php';
require_once 'database/getItem.php';
require_once 'database/eatItem.php';
require_once 'package/setLog.php';
require_once 'package/generateExp.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class FishCommand
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

        // Check for the command prefix
        if (strpos($content, 'm.fish') !== false) {
            if (getItem($authorUsername, 'Fishing rod') === '0') {
                $embed = new Embed($this->discord);
                $embed->setTitle("Error!");
                $embed->setDescription("You need a fishing rod!");
                $embed->setFooter('Requested by '.$authorUsername);
                $embed->setTimestamp(time());
                $embed->setColor(0xff1100);
                $embed->setImage(getImage('ERR'));
                $message->channel->sendEmbed($embed);
                setLog("Fish command", "{$authorUsername} tried fishing without a fishing rod");
                return;
            } else {
                if (rand(0, 1) === 1) {
                    $itemData = getFish();
                    $embed = new Embed($this->discord);
                    $embed->setTitle($authorUsername.' caught a '.$itemData['itemName'].'!');
                    $embed->setDescription($itemData['itemDesc']);
                    $embed->setImage($itemData['itemImage']);
                    $embed->setColor($itemData['itemColor']);
                    $embed->setFooter("blublbublublub");
                    $embed->setTimestamp(time());
                    $message->channel->sendEmbed($embed);
                    
                    $itemName = $itemData['itemName'];
                    generateExp($message, $authorUsername);
                    setItem($authorUsername, $itemName);
                    setLog("Fish command", "{$authorUsername} caught a fish and has been added to database");
                    return;
                } else {
                    $message->channel->sendMessage("***Snap!*** * *Looks like your fishing rod snapped*");
                    eatItem($authorUsername, 'Fishing rod');
                }
            }
        } else {
            $message->channel->sendMessage("Usage: `m.fish` to catch a fish.");
        }
    }
}
