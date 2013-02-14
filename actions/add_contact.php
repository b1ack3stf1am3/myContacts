<?php
		require('../config/db.php'); 
?>

<pre>POST: <?php print_r($_POST)?></pre>
<?php
$required = array(
		'contact_firstname',
		'contact_lastname',
		'contact_email',
		'contact_phone1',
		'contact_phone2',
		'contact_phone3'
);

extract($_POST);


foreach($required as $r) {
	if(!isset($_POST[$r]) || $_POST[$r] =='') {
		$_SESSION['message'] = array(
				'type' => 'danger',
				'text' => 'Please provide all required information');
	
		$_SESSION['POST'] = $_POST;
		
		header('Location:../?p=form_add_contacts');
		
		
		
		die();
	}
}



// Connect to DB
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$contact_phone = $contact_phone1.$contact_phone2.$contact_phone3;
//Add contact to DB
$sql = "INSERT INTO contacts (contact_firstname,contact_lastname,contact_email,contact_phone) VALUES ('$contact_firstname','$contact_lastname','$contact_email',$contact_phone)";
$conn->query($sql);
//Query DB

// Close connection
$conn->close();

// Set location header

//header("Location:./?p=list_contacts");