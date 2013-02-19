<?php
		require('../config/db.php'); 
		session_start();
?>

<pre>POST: <?php print_r($_POST)?></pre>
<?php

$contact_phone = $contact_phone1.$contact_phone2.$contact_phone3;

$required = array(
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

extract($_POST);




foreach($required as $r) {
	if(!isset($_POST[$r]) || $_POST[$r] =='') {
		
		$_SESSION['message'] = array(
				'type' => 'error',
				'text' => 'Please provide all required information');
	
		$_SESSION['POST'] = $_POST;
		
		header('Location:../?p=form_add_contacts');
		
		die();
	} else {
		$_SESSION['message'] = array(
				'type' => 'success',
				'text' => 'Your contact has been added');
	}
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

header("Location:../?p=list_contacts");