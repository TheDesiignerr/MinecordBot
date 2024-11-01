<?php

namespace Commands;

require_once 'package/setLog.php';
require_once 'database/getItem.php';
require_once 'database/addFarm.php';
require_once 'database/eatItem.php';
require_once 'package/generateExp.php';

use Discord\Parts\Channel\Message;
use Discord\Parts\Embed\Embed;

class FarmCommand {
    private $discord;

    public function __construct($discord) {
        $this->discord = $discord;
    }

    public function execute(Message $message) {
        $authorUsername = $message->author->username;
        setLog("[FARM COMMAND]", " $authorUsername requested farm command");
        
        if(getItem($authorUsername, 'Wooden hoe') && getItem($authorUsername, 'Water bucket')) {
            if (!$this->hoeBreak()) {
                setLog("[FARM COMMAND]", " $authorUsername hoe has broken");
                eatItem($authorUsername, 'Wooden hoe');
                $message->channel->sendMessage("*Snap!* * Your hoe broke!");
            } else {
                setLog("[FARM COMMAND]", " $authorUsername hoe has farmed");
                $this->sendFarmEmbed($message, $authorUsername);
            }
        } else {
            $message->channel->sendMessage("You need `Water bucket` & `Wooden hoe` to farm!");
        }
    }

    private function sendFarmEmbed(Message $message, $authorUsername) {
        // Array of farm types
        $farmTypes = ['wheat', 'carrot', 'potato', 'iron'];
        
        // Randomly determine if no crops will be found (15% chance)
        if (rand(1, 100) >= 97) {
            $description = "Nothing was farmed this time!";
        } else {
            $description = "$authorUsername You farmed:\n";
            
            // Determine how many crops to farm (1 to 3 crops)
            if (getItem($authorUsername, 'Bone meal')) {
                $numCropsToFarm = rand(3, 8);
                
                if (rand(1, 100) >= 5) {
                    eatItem($authorUsername, 'Bone meal');
                };
            } else {
                $numCropsToFarm = rand(1, 5);
            }
            
            $farmedItems = [];
            
            for ($i = 0; $i < $numCropsToFarm; $i++) {
                // Randomly select one farm type for each crop
                $selectedFarmType = $farmTypes[array_rand($farmTypes)];
                $item = $this->generateFarm($selectedFarmType);
                
                
                if ($item !== null) {
                    $farmedItems[] = "**" . $item['icon'] . " " . $item['placeholder'] . $item['amount'] . " " . $item['name'] . "**";
                    addFarm($authorUsername, $item['name'], $item['amount']);
                }
            }
    
            // If any items were farmed, append them to the description
            if (!empty($farmedItems)) {
                $description .= implode("\n", $farmedItems);
                if (rand(1, 100) >= 15) {
                    eatItem($authorUsername, 'Water bucket');
                    generateExp($message, $authorUsername);
                }
            } else {
                $description .= "Nothing was farmed this time!";
                setLog("[FARM COMMAND]", " $authorUsername farmed nothing");
            }
        }
        
        $embed = new Embed($this->discord);
        $embed->setTitle("$authorUsername swings the hoe!");
        $embed->setDescription($description);
        $embed->setFooter("Farmed by $authorUsername");
        $message->channel->sendEmbed($embed);
    }
    

    private function generateFarm($farmType) {
        if (strtolower($farmType) === 'wheat') {
            $icon = "<:wheat:1298738689895038996>";
            $amount = rand(1, 5);
            $isFarm = rand(0, 1);
            

                $farmData = array(
                    'amount'=>$amount,
                    'icon'=>$icon,
                    'name'=>'Wheat',
                    'placeholder'=> '+'
                );
                return $farmData;
        } elseif (strtolower($farmType) === 'carrot') {
            $icon = "<:carrot:1298738812012331089>";
            $amount = rand(1, 5);
            $isFarm = rand(0, 1);
            
            if ($isFarm === 1) {
                $farmData = array(
                    'amount'=>$amount,
                    'icon'=>$icon,
                    'name'=>'Carrot',
                    'placeholder'=> '+'
                );
                return $farmData;
            } else {
                return;
            }
            
        } elseif (strtolower($farmType) === 'iron') {
            if (!rand(1, 100) >= 2) {
                $icon = "<:iron:1296932191992807435>";
                $amount = 1;
                $isFarm = rand(0, 1);
                
                if ($isFarm === 1) {
                    $farmData = array(
                        'amount'=>$amount,
                        'icon'=>$icon,
                        'name'=>'Iron',
                        'placeholder'=> '+'
                    );
                    return $farmData;
                } else {
                    return;
                }
            } else {
                return;
            };
            return; 
        } elseif (strtolower($farmType) === 'potato') {
            if (rand(0, 1) === 1) {
                $icon = "<:potato:1298738704348614777>";
                $amount = rand(1, 5);
                $isFarm = rand(0, 1);

                if ($isFarm === 1) {
                    $farmData = array(
                        'amount'=>$amount,
                        'icon'=>$icon,
                        'name'=>'Potato',
                        'placeholder'=> '+'
                    );
                    return $farmData;
                } else {
                    return;
                }
            } else {
                $icon = "<:poisonous_potato:1298738732727402589>";
                $amount = rand(1, 5);
                $isFarm = rand(0, 1);

                if ($isFarm === 1) {
                    $farmData = array(
                        'amount'=>$amount,
                        'icon'=>$icon,
                        'name'=>'Poisonous potato',
                        'placeholder'=> '+'
                    );
                    return $farmData;
                } else {
                    return;
                }
            }
        } else {
            echo "FARM ERROR";
            return "FARM ERROR";
        };
    }


    private function hoeBreak() {
        if (rand(0, 100) >= 97) {
            return false;
        } else {
            return true;
        };
    }
}