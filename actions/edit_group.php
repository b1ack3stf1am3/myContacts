<?php session_start();

$fields = array(
			'name'		 => 'contact_firstname',
			'type'		 => 'text',
			'required'	 => 'true'
		);







extract($_POST);


$conn = new mysqli('localhost','mycontacts_user','BPtJFH7hpnnMcKdx','mycontacts');

$sql = "UPDATE groups
		SET group_name='$group_name'
		WHERE group_id={$_POST['group_id']}";
$conn->query($sql);
$conn->close();

header("Location:../?p=list_groups");

$_SESSION['message'] = array(
		'type' => 'info',
		'text' => 'You have edited your group');