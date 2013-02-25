<?php
		require('../config/db.php');
		require('../actions/fields.php'); 
		session_start();
?>

<pre>POST: <?php print_r($_POST)?></pre>
<?php

extract($_POST);
$contact_phone = $contact_phone1.$contact_phone2.$contact_phone3;

$fields = array(
		array(
				'name'		 => 'contact_firstname',
				'type'		 => 'text',
				'required'	 => 'true'	),

		array(
				'name'		 => 'contact_lastname',
				'type'		 => 'text',
				'required'	 => 'true'	),
		array(
				'name'		 => 'contact_email',
				'type'		 => 'text',
				'required'	 => 'true'	),
		array(
				'name'		 => 'contact_phone',
				'type'		 => 'numeric',
				'lengh'		 => '10',
				'required'	 => 'true'	),
);







foreach($fields as $r) {
	if($r['required'] == 'true');
}
		




// Connect to DB
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);


//Add contact to DB
$sql = "INSERT INTO contacts (contact_firstname,contact_lastname,contact_email,contact_phone) VALUES ('$contact_firstname','$contact_lastname','$contact_email',$contact_phone)";
$conn->query($sql);
//Query DB

// Close connection
$conn->close();

// Set location header

//header("Location:../?p=list_contacts");