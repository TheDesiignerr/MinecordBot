<?php

function getFish() {
    require_once 'colorApi.php';

    $apiRes = array(
        'ItemName'=>'',
        'itemDesc'=>'',
        'itemImage'=>'',
        'itemColor'=>''
    );

    $rand = rand(1, 6);

    switch (true) {

        case $rand <= 1:
            $apiRes['itemName'] = 'Cod';
            $apiRes['itemDesc'] = 'Sounds fishy...';
            $apiRes['itemImage'] = getImage($apiRes['itemName']);
            $apiRes['itemColor'] = getColor($apiRes['itemName']);

            return $apiRes;
            break;

        case $rand <= 2:
            $apiRes['itemName'] = 'Salmon';
            $apiRes['itemDesc'] = 'That is a nice color';
            $apiRes['itemImage'] = getImage($apiRes['itemName']);
            $apiRes['itemColor'] = getColor($apiRes['itemName']);

            return $apiRes;
            break;

        case $rand <= 3:
            $apiRes['itemName'] = 'Pufferfish';
            $apiRes['itemDesc'] = 'Yooo, that is spiky!';
            $apiRes['itemImage'] = getImage($apiRes['itemName']);
            $apiRes['itemColor'] = getColor($apiRes['itemName']);

            return $apiRes;
            break;

        case $rand <= 4:
            $apiRes['itemName'] = 'Fishing rod';
            $apiRes['itemDesc'] = 'Someone might have lost this!';
            $apiRes['itemImage'] = getImage($apiRes['itemName']);
            $apiRes['itemColor'] = getColor($apiRes['itemName']);

            return $apiRes;
            break;

        case $rand <= 5:
            $apiRes['itemName'] = 'Ender pearl';
            $apiRes['itemDesc'] = 'You can travel with this! `m.explore`';
            $apiRes['itemImage'] = getImage($apiRes['itemName']);
            $apiRes['itemColor'] = getColor($apiRes['itemName']);

            return $apiRes;
            break;

        case $rand <= 6:
            $apiRes['itemName'] = 'Water bucket';
            $apiRes['itemDesc'] = 'If you have a hoe you can farm! `m.farm`';
            $apiRes['itemImage'] = getImage($apiRes['itemName']);
            $apiRes['itemColor'] = getColor($apiRes['itemName']);

            return $apiRes;
            break;
    }
};