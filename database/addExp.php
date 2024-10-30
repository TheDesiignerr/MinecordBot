<?php

function addExp($author, $expAmount) {
    include 'dbh.php';
    include_once 'package/setLog.php';

    // Validate exp 
    $query = "SELECT exp_amount FROM status WHERE username = '$author'";
    $table = mysqli_query($conn, $query);

    if (!$table) {
        setLog("DATABASE ERROR", "Error executing query: " . mysqli_error($conn));
        return null;
    }

    // Check if the user exists in the database
    if (mysqli_num_rows($table) === 0) {
        setLog("DATABASE QUERIES", "$author does not have any exp; inserting initial $expAmount");
        
        // Wrap author in single quotes for the INSERT statement
        $query = "INSERT INTO status (username, exp_amount) VALUES ('$author', $expAmount)";
        if (!mysqli_query($conn, $query)) {
            setLog("DATABASE ERROR", "Error executing insert: " . mysqli_error($conn));
        }
    } else {
        // Update exp amount if the user already exists
        $query = "UPDATE status SET exp_amount = exp_amount + $expAmount WHERE username = '$author'";
        if (!mysqli_query($conn, $query)) {
            setLog("DATABASE ERROR", "Error executing update: " . mysqli_error($conn));
        } else {
            setLog("DATABASE QUERIES", "Added $expAmount exp to $author");
            return $expAmount;
        }
    }
}
