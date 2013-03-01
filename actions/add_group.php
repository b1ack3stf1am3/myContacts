<?php
require('../config/db.php');
require('../lib/functions.php');
session_start();
?>
<?php

extract($_POST);


// Connect to DB
$conn = open_db();


//Add contact to DB
$sql = "INSERT INTO groups (group_name) VALUES ('$group_name')";
$conn->query($sql);
// Close connection
$conn->close();

// Set location header

header("Location:../?p=list_groups");