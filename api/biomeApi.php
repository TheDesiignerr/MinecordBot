<?php

// Get biome name and image
function getBiome() {
    $rand = rand(1, 4);

    if ($rand === 1) {
        $biomeData = array(
            'biomeName'=>'Desert',
            'biomeImage'=>'https://assets.badlion.net/blog/1-20/minecraft-biome-guide/desert.webp',
        );

        return $biomeData;
    } elseif ($rand === 2) {
        $biomeData = array(
            'biomeName'=>'Plains',
            'biomeImage'=>'https://images4.alphacoders.com/733/733572.png',
        );

        return $biomeData;
    } elseif ($rand === 3) {
        $biomeData = array(
            'biomeName'=>'Forest',
            'biomeImage'=>'https://cdn.pixabay.com/photo/2022/05/17/14/26/minecraft-7202839_1280.jpg',
        );

        return $biomeData;
    } elseif ($rand === 4) {
        $biomeData = array(
            'biomeName'=>'Beach',
            'biomeImage'=>'https://assets.badlion.net/blog/1-20/minecraft-biome-guide/beach.webp',
        );

        return $biomeData;
    };
}

// Get biome item data
function getBiomeItems($biomeName) {
    $rand = rand(1, 10);

    if ($biomeName === 'Desert') {
        $biomeItems = array(
            'Deadbush',
            'Cactus',
            'Sand',
            'Bone',
        );

        $biomeItemData = array(
            'selectedItem'=>$biomeItems[rand(0, count($biomeItems) - 1)],
            'selectedAmount'=>rand(1, 10),
        );

        return $biomeItemData;
    } elseif ($biomeName === 'Plains') {
        $biomeItems = array(
            'Apple',
            'Poppy',
            'Daisy',
            'Egg',
            'Stick',
        );

        $biomeItemData = array(
            'selectedItem'=>$biomeItems[rand(0, count($biomeItems) - 1)],
            'selectedAmount'=>rand(1, 10),
        );

        return $biomeItemData;
    } elseif ($biomeName === 'Forest') {
        $biomeItems = array(
            'Apple',
            'Poppy',
            'Daisy',
            'Stick',
            'Sweet berries',
            'Planks',
        );

        $biomeItemData = array(
            'selectedItem'=>$biomeItems[rand(0, count($biomeItems) - 1)],
            'selectedAmount'=>rand(1, 10),
        );

        return $biomeItemData;
    } elseif ($biomeName === 'Beach') {
        $biomeItems = array(
            'Sand',
            'Cod',
            'Salmon',
        );

        $biomeItemData = array(
            'selectedItem'=>$biomeItems[rand(0, count($biomeItems) - 1)],
            'selectedAmount'=>rand(1, 10),
        );

        return $biomeItemData;
    };
}