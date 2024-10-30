<?php

function getItem($author, $itemName) {
    include 'dbh.php';
    require_once 'package/setLog.php';

    // Escape user input to prevent SQL injection
    $author = mysqli_real_escape_string($conn, $author);
    $itemName = mysqli_real_escape_string($conn, $itemName);

    $query = "SELECT mine_amount FROM inventory WHERE mine_author='$author' AND mine_name='$itemName'";
    $table = mysqli_query($conn, $query);

    if ($table === false) {
        setLog("database queries", "Query failed for {$author}'s {$itemName}: " . mysqli_error($conn));
        return null; // Return null on failure
    }

    if (mysqli_num_rows($table) === 0) {
        setLog("database queries", "{$author} does not have any {$itemName}");
        return 0; // Return null if no item found
    } else {
        $row = mysqli_fetch_assoc($table);
        setLog("database queries", "{$author} has {$row['mine_amount']}x {$itemName}");
        return $row['mine_amount']; // Return the amount as an integer
    }
}
