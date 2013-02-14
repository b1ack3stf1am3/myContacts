<pre><?php print_r($_POST)?></pre>
<?php

extract($_POST);

$contact_phone = $contact_phone1.$contact_phone2.$contact_phone3;

$conn = new mysqli('localhost','mycontacts_user','BPtJFH7hpnnMcKdx','mycontacts');

$sql = "UPDATE contacts
		SET contact_firstname='$contact_firstname', contact_lastname='$contact_lastname',contact_email='$contact_email',contact_phone='$contact_phone'
		WHERE contact_id={$_POST['contact_id']}";
$conn->query($sql);
$conn->close();

header("Location:../?p=list_contacts");
