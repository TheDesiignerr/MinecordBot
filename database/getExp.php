<?php

function getExp($author) {
    include 'dbh.php';
    include_once 'package/setLog.php';

    $query = "SELECT exp_amount FROM status WHERE username = '$author'";
    $table = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($table);

    if($row['exp_amount'] === null) {
        return 0;
    } else {
        return $row['exp_amount'];
    }
}
