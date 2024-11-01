<?php

function getTotalItems($author) {
    include 'dbh.php';
    include_once 'package/setLog.php';

    $query = "SELECT COUNT(*) FROM inventory WHERE mine_author = '$author'";
    $table = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($table);

    if($row[0] === null) {
        return 0;
    } else {
        return $row[0];
    }
}
