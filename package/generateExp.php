<?php

use Discord\Parts\Channel\Message;

function generateExp(Message $message, $author) {
    include_once 'database/addExp.php';
    $xpAmount = rand(1, 10);
    addExp($author, $xpAmount);
    $message->channel->sendMessage("**<:orb:1300200337935695992>+$xpAmount Exp**");
}