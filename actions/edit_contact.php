<?php session_start();

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
					'required'	 => 'true'	)
		);


foreach($fields as $r) {
	if($r['required'] = '') {
		header("Location:../?p=form_edit_contacts");
		
		$_SESSION['message'] = array(
				'type' => 'error',
				'text' => 'You have edited your group');
	}
}



extract($_POST);

$contact_phone = $contact_phone1.$contact_phone2.$contact_phone3;

$conn = new mysqli('localhost','mycontacts_user','BPtJFH7hpnnMcKdx','mycontacts');

$sql = "UPDATE contacts
		SET contact_firstname='$contact_firstname', contact_lastname='$contact_lastname',contact_email='$contact_email',contact_phone='$contact_phone',group_id='$group_id'
		WHERE contact_id={$_POST['contact_id']}";
$conn->query($sql);
$conn->close();

header("Location:../?p=list_contacts");

$_SESSION['message'] = array(
		'type' => 'info',
		'text' => 'You have edited your contact');