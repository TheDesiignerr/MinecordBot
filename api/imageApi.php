<?php

function getImage($itemName) {
    switch (true) {
        case $itemName === 'Dirt':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/9b/Dirt_JE2_BE2.png/revision/latest?cb=20200309195232';
            break;

        case $itemName === 'Furnace':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/99/Furnace_%28S%29_JE4.png/revision/latest?cb=20210111063232';
            break;

        case $itemName === 'Planks':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/37/Oak_Planks_JE6_BE3.png/revision/latest?cb=20200317041640';
            break;

        case $itemName === 'Crafting table':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/c/c6/Crafting_Table_JE1.png/revision/latest?cb=20220707070450';
            break;

        case $itemName === 'Bread':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/44/Bread_JE3_BE3.png/revision/latest?cb=20190503044317';
            break;

        case $itemName === 'String':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/c/c0/String_JE1_BE1.png/revision/latest?cb=20200128023538';
            break;

        case $itemName === 'Stick':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/7/7a/Stick_JE1_BE1.png/revision/latest?cb=20200128023441';
            break;
        
        case $itemName === 'Cobblestone':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/3d/Cobblestone_%28Texture_Update_pre-release_2%29.png/revision/latest?cb=20200825030444';
            break;

        case $itemName === 'Ender pearl':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/f/f6/Ender_Pearl_JE3_BE2.png/revision/latest?cb=20200512195721';
            break;

        case $itemName === 'Wooden hoe':
            return 'https://minecraft.wiki/images/Wooden_Hoe_JE3_BE3.png?e9940&format=original';
            break;

        case $itemName === 'Stone hoe':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/6c/Stone_Hoe_JE1_BE1.png/revision/latest?cb=20190403173937';
            break;

        case $itemName === 'Iron hoe':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/b/ba/Iron_Hoe_JE2_BE2.png/revision/latest/scale-to-width/360?cb=20200128141346';
            break;
        
        case $itemName === 'Gold hoe':
            return 'https://minecraft.wiki/images/Golden_Hoe_JE3_BE3.png?d6884';
            break;

        case $itemName === 'Diamond hoe':
            return 'https://minecraft.wiki/images/Diamond_Hoe_JE3_BE3.png?36ad1';
            break;

        case $itemName === 'Wheat':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/7/75/Wheat_JE2_BE2.png/revision/latest?cb=20190521034232';
            break;

        case $itemName === 'Potato':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/93/Potato_JE2.png/revision/latest?cb=20200128073051';
            break;

        case $itemName === 'Cooked potato':
            return 'https://minecraft.wiki/images/Baked_Potato_JE4_BE2.png?18727';
            break;

        case $itemName === 'Poisonous potato':
            return 'https://minecraft.wiki/images/Poisonous_Potato_JE3_BE2.png?8f886';
            break;

        case $itemName === 'Carrot':
            return 'https://static.wikia.nocookie.net/minecraft/images/6/63/Carrot_Updated.png/revision/latest?cb=20190721134506';
            break;

        case $itemName === 'Water bucket':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/d/dc/Water_Bucket_JE2_BE2.png/revision/latest?cb=20190430112051';
            break;

        case $itemName === 'Coal':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/58/Coal_JE4_BE3.png/revision/latest?cb=20230625214010';
            break;

        case $itemName === 'Iron':
            return 'https://minecraft.wiki/images/Iron_Ore_JE6_BE4.png?b1fb3';
            break;

        case $itemName === 'Daisy':
            return 'https://minecraft.wiki/images/Oxeye_Daisy_JE7_BE2.png?5d367';
            break;

        case $itemName === 'Gold':
            return 'https://minecraft.wiki/images/Gold_Ore_JE7_BE4.png?9817a';
            break;

        case $itemName === 'Cake':
            return 'https://minecraft.wiki/images/Cake_JE4.png?009f2';
            break;

        case $itemName === 'Diamond':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/a/ab/Diamond_JE3_BE3.png/revision/latest/thumbnail/width/360/height/360?cb=20230924193138';
            break;
        
        case $itemName === 'Fishing rod':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/7/7f/Fishing_Rod_JE2_BE2.png/revision/latest?cb=20200201063839';
            break;

        case $itemName === 'Iron ingot':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/6/64/Iron_Ingot_JE1.png/revision/latest?cb=20201014002107';
            break;

        case $itemName === 'Gold ingot':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/8/8a/Gold_Ingot_JE4_BE2.png/revision/latest?cb=20200224211607';
            break;

        case $itemName === 'Cooked cod':
            return 'https://minecraft.wiki/images/Cooked_Cod_JE4_BE3.png?b495d';
            break;

        case $itemName === 'Cooked salmon':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/2/2b/Cooked_Salmon_JE2_BE2.png/revision/latest?cb=20190403183831';
            break;

        case $itemName === 'Cod':
            return 'https://static.wikia.nocookie.net/minecraft-mob/images/3/3f/Cod_%28mob%29.png/revision/latest/scale-to-width-down/217?cb=20180223184055';
            break;

        case $itemName === 'Salmon':
            return 'https://preview.redd.it/every-salmon-in-minecraft-is-dying-v0-de8669a5xqmb1.png?width=299&format=png&auto=webp&s=1f036bb82fc2efa76189ec351af62a5f810ce9f5';
            break;

        case $itemName === 'Pufferfish':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/2/2e/Pufferfish_large.png/revision/latest?cb=20190924133041';
            break;

        case $itemName === 'Apple':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/a/af/Apple_JE3_BE3.png/revision/latest?cb=20200519232834';
            break;

        case $itemName === 'Sweet berries':
            return 'https://minecraft.wiki/images/Sweet_Berries_JE1_BE1.png?d29d1';
            break;

        case $itemName === 'Poppy':
            return 'https://minecraft.wiki/images/Poppy_JE8_BE2.png?10687';
            break;

        case $itemName === 'Snowball':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/2/2a/Snowball_JE3_BE3.png/revision/latest?cb=20190522005550';
            break;

        case $itemName === 'Egg':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/96/Egg_JE2_BE2.png/revision/latest?cb=20240728031646';
            break;

        case $itemName === 'ERR':
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/96/Dead_Bush_%28texture%29_JE1_BE1.png/revision/latest?cb=20200918200748';
            break;

        default:
            return 'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/96/Dead_Bush_%28texture%29_JE1_BE1.png/revision/latest?cb=20200918200748';
            break;
    };
};