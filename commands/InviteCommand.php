<?php

namespace Commands;

use Discord\Parts\Channel\Message;

class InviteCommand
{
    public function execute(Message $message)
    {
        // Check for the command with the new prefix
        if (strtolower($message->content) === 'm.link') {
            $this->sendInviteEmbed($message);
        }
    }

    private function sendInviteEmbed(Message $message)
    {
        $inviteLink = 'https://discord.com/oauth2/authorize?client_id=1296894207750967419';
        $message->channel->sendMessage($inviteLink);
    }
}
