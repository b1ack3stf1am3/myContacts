<?php session_start();?>
<pre>$_GET: <?php print_r($_GET) ?></pre>
<?php

extract($_GET);
// Connect to the DB
$conn = new mysqli('localhost','mycontacts_user','BPtJFH7hpnnMcKdx','mycontacts');

// Execute th3e query
$sql = "DELETE FROM contacts WHERE contact_id=$id";
$conn->query($sql);

// Close the connection
$conn->close();



//Redirect
header("Location:../?p=list_contacts");

$_SESSION['message'] = array(
		'type' => 'error',
		'text' => 'Your contact has been deleted.');