<?php

function createCraft($author, $craftId) {
    include 'dbh.php';
    require_once 'getItem.php';
    $itemName = ucfirst(strtolower($craftId));

    switch ($craftId) {
        case 'crafting table':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 4 WHERE mine_name = 'Planks' AND mine_author = '$author'";
            mysqli_query($conn, $query);
                
            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;

        case 'fishing rod':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 2 WHERE mine_name = 'String' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $query = "UPDATE inventory SET mine_amount = mine_amount - 2 WHERE mine_name = 'Stick' AND mine_author = '$author'";
            mysqli_query($conn, $query);
                
            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;

        case 'furnace':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 8 WHERE mine_name = 'Cobblestone' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;

        case 'wooden hoe':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 2 WHERE mine_name = 'Planks' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $query = "UPDATE inventory SET mine_amount = mine_amount - 2 WHERE mine_name = 'Stick' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;

        case 'bread':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 3 WHERE mine_name = 'Wheat' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;

        case 'stick':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 2 WHERE mine_name = 'Planks' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;

        case 'bone meal':
            $query = "UPDATE inventory SET mine_amount = mine_amount - 1 WHERE mine_name = 'Bone' AND mine_author = '$author'";
            mysqli_query($conn, $query);

            $currentAmount = getItem($author, $itemName);

            if ($currentAmount === 0) {
                $query = "INSERT INTO inventory(mine_name, mine_amount, mine_author) VALUES('$itemName', mine_amount + 1, '$author')";
                mysqli_query($conn, $query);
            } else {
                $query = "UPDATE inventory SET mine_amount = mine_amount + 1 WHERE mine_name = '$itemName' AND mine_author = '$author'";
                mysqli_query($conn, $query);
            }
            break;
    }
}
