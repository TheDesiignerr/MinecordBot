<?php

namespace Commands;

use Discord\Parts\Channel\Message;

class VoteCommand
{
    public function execute(Message $message)
    {
        // Check for the command prefixed with 'm.'
        if (strtolower(trim($message->content)) === 'm.vote') {
            $this->sendVoteLink($message);
        }
    }

    private function sendVoteLink(Message $message)
    {
        $inviteLink = "https://top.gg/bot/1296894207750967419#reviews \n https://discordbotlist.com/bots/cavemen/upvote \n **Our Sponsor! ** https://lunyhosting.com/";
        $message->channel->sendMessage($inviteLink);
    }
}
