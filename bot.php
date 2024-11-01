<?php

require __DIR__ . '/vendor/autoload.php';
include 'loadToken.php';
include 'api/mineApi.php';
include 'api/imageApi.php';
include 'database/setItem.php';
include 'database/getItem.php';
include 'database/validateUser.php';
include 'database/giveItem.php';
include 'database/smeltItem.php';
include 'database/eatItem.php';
include 'database/getTotalUsers.php';

use Discord\Discord;
use Discord\Parts\Embed\Embed;
use Discord\WebSockets\Event;
use Discord\WebSockets\Intents;
use Discord\Parts\Channel\Message;
use Discord\Parts\User\Activity;

// Command classes
use Commands\MineCommand;
use Commands\FishCommand;
use Commands\InvCommand;
use Commands\GiveCommand;
use Commands\MeltCommand;
use Commands\CookCommand;
use Commands\EatCommand;
use Commands\HelpCommand;
use Commands\VoteCommand;
use Commands\InviteCommand;
use Commands\ThrowCommand;
use Commands\UpdatesCommand;
use Commands\CraftCommand;
use Commands\FarmCommand;
use Commands\ExploreCommand;
use Commands\StatusCommand;
use Commands\InspectCommand;

$discord = new Discord([
    'token' => loadToken(),
    'intents' => Intents::getDefaultIntents() | Intents::GUILD_MEMBERS,
]);

// Load Commands
$commands = [
    'm.mine' => MineCommand::class,
    'm.fish' => FishCommand::class,
    'm.inv' => InvCommand::class,
    'm.give' => GiveCommand::class,
    'm.smelt' => MeltCommand::class,
    'm.cook' => CookCommand::class,
    'm.eat' => EatCommand::class,
    'm.help' => HelpCommand::class,
    'm.vote' => VoteCommand::class,
    'm.link' => InviteCommand::class,
    'm.throw' => ThrowCommand::class,
    'm.updates' => UpdatesCommand::class,
    'm.craft' => CraftCommand::class,
    'm.farm' => FarmCommand::class,
    'm.explore' => ExploreCommand::class,
    'm.status' => StatusCommand::class,
    'm.inspect' => InspectCommand::class,
];

$discord->on('ready', function($discord) use ($commands) {
    echo "Bot powered up!", PHP_EOL;

    // Create a new Activity instance
    $activity = new Activity($discord);
    $activity->name = '✨m.help ✦ ' .getTotalUsers() . ' Users';
    $activity->type = 0; // 0 corresponds to 'Playing'

    // Set the bot's presence
    $discord->updatePresence($activity);

    // Listen for messages
    $discord->on('message', function (Message $message) use ($discord, $commands) {
        if ($message->author->bot) {
            return;
        }

        $authorUsername = $message->author->username;
        $commandContent = strtolower($message->content);

        // Check for commands
        foreach ($commands as $command => $commandClass) {
            if (strpos($commandContent, $command) !== false) {
                if (class_exists($commandClass)) {
                    $commandInstance = new $commandClass($discord);
                    $commandInstance->execute($message, $authorUsername);
                } else {
                    echo 'Command class not found';
                }
                return;
            }
        }
    });
});

$discord->run();
