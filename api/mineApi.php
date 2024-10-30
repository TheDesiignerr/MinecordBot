<?php

function apiGet() {
    require_once 'imageApi.php';
    require_once 'colorApi.php';

    // Define item data with chances and concise descriptions
    $items = [
        ['name' => 'Diamond', 'desc' => 'A rare gem that sparkles with adventure!', 'rarity' => 'Legendary', 'chance' => 2],
        ['name' => 'Cake', 'desc' => 'A sweet treat for every celebration!', 'rarity' => 'Rare', 'chance' => 5],
        ['name' => 'Gold', 'desc' => 'Shiny and valuable, a true treasure!', 'rarity' => 'Rare', 'chance' => 5],
        ['name' => 'Daisy', 'desc' => 'A cheerful flower that brightens your day!', 'rarity' => 'Rare', 'chance' => 5],
        ['name' => 'String', 'desc' => 'Essential for crafting and creation!', 'rarity' => 'Rare', 'chance' => 5],
        ['name' => 'Iron', 'desc' => 'Strong and vital for your tools!', 'rarity' => 'Uncommon', 'chance' => 10],
        ['name' => 'Planks', 'desc' => 'Perfect for building your dreams!', 'rarity' => 'Common', 'chance' => 15],
        ['name' => 'Poppy', 'desc' => 'A lovely flower to enhance your garden!', 'rarity' => 'Common', 'chance' => 10],
        ['name' => 'Stick', 'desc' => 'Simple yet useful for many tasks!', 'rarity' => 'Common', 'chance' => 10],
        ['name' => 'Coal', 'desc' => 'Great for fueling your adventures!', 'rarity' => 'Common', 'chance' => 10],
        ['name' => 'Apple', 'desc' => 'A sweet snack to energize you!', 'rarity' => 'Common', 'chance' => 10],
        ['name' => 'Sweet berries', 'desc' => 'Delicious fruits bursting with flavor!', 'rarity' => 'Common', 'chance' => 10],
        ['name' => 'Cobblestone', 'desc' => 'A sturdy building block for your projects!', 'rarity' => 'Common', 'chance' => 10],
        ['name' => 'Snowball', 'desc' => 'Fun for snow fights and winter joy!', 'rarity' => 'Common', 'chance' => 5],
        ['name' => 'Egg', 'desc' => 'A versatile item for cooking and crafting!', 'rarity' => 'Common', 'chance' => 5],
        ['name' => 'Dirt', 'desc' => 'Essential for building and planting!', 'rarity' => 'Common', 'chance' => 5],
    ];
    
    

    // Calculate total chances
    $totalChance = array_sum(array_column($items, 'chance'));
    $rand = rand(1, $totalChance);
    $cumulativeChance = 0;

    // Select item based on random number
    foreach ($items as $item) {
        $cumulativeChance += $item['chance'];
        if ($rand <= $cumulativeChance) {
            return [
                'itemName' => $item['name'],
                'itemDesc' => $item['desc'],
                'itemImage' => getImage($item['name']),
                'itemRarity' => $item['rarity'],
                'itemColor' => getColor($item['name']),
            ];
        }
    }
}
