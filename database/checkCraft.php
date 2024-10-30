<?php

function checkCraft($author, $craftId) {
    include 'dbh.php';
    require_once 'package/setLog.php';
    require_once 'database/getItem.php';

    $carfts = array(
        'crafting table',
        'furnace',
        'fishing rod',
        'wooden hoe',
        'bread'
    );

    if (in_array($craftId, $carfts)) {
        if ($craftId === 'crafting table') {
            if (getItem($author, 'Planks') < 4) {
                return false;
            } else {
                return true;
            }
        } elseif ($craftId === 'fishing rod') {
            if (getItem($author, 'String') < 2 || getItem($author, 'Stick') < 3) {
                return false;
            } else {
                return true;
            }
        } elseif ($craftId === 'furnace') {
            if (getItem($author, 'Cobblestone') < 8) {
                return false;
            } else {
                return true;
            }
        } elseif ($craftId === 'wooden hoe') {
            if (getItem($author, 'Planks') < 2 || getItem($author, 'Stick') < 2) {
                return false;
            } else {
                return true;
            }
        } elseif ($craftId === 'bread') {
            if (getItem($author, 'Wheat') < 3) {
                return false;
            } else {
                return true;
            }
        };

    } else {
        return false;
    }
}