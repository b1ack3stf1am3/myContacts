<?php session_start();?>

<?php

extract($_GET);
// Connect to the DB
$conn = new mysqli('localhost','mycontacts_user','BPtJFH7hpnnMcKdx','mycontacts');

// Execute th3e query
$sql = "DELETE FROM groups WHERE group_id=$id";
$conn->query($sql);

// Close the connection
$conn->close();



//Redirect
header("Location:../?p=list_groups");

$_SESSION['message'] = array(
		'type' => 'error',
		'text' => 'Your group has been deleted.');