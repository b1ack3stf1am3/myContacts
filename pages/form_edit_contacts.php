<h2>Edit Contacts</h2>
<?php 
$conn=open_db();
$sql = "SELECT * FROM contacts WHERE contact_id={$_GET['id']}";
$results = $conn->query($sql);

$contact = $results->fetch_assoc();
extract($contact);
?>

<form class="form-horizontal" action="./actions/edit_contact.php" method="post">
	<div class="control-group">
	    <div class="controls">
	    	<input type="hidden" name="contact_id" value="<?php  echo $contact_id?>" />
	    </div>
	 </div>
	<div class="control-group">
	    <label class="control-label" for="firstname">First Name</label>
	    <div class="controls">
	    	<input type="text" name="contact_firstname" value="<?php echo $contact_firstname ?>">
	    	<input type="text" name="contact_lastname" value="<?php echo $contact_lastname ?>">
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="email">Email</label>
	    <div class="controls">
	    	<input type="text" name="contact_email" value="<?php echo $contact_email ?>">
	    </div>
	  </div>
	 <div class="control-group">
	    <label class="control-label" for="phone">Phone Number</label>
	    <div class="controls">
	    	<input type="text" name="contact_phone1" value="<?php echo substr($contact_phone,0,3) ?>" />
	    	<input type="text" name="contact_phone2" value="<?php echo substr($contact_phone,3,3) ?>" />
	    	<input type="text" name="contact_phone3" value="<?php echo substr($contact_phone,-4) ?>" />
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Edit Contact</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>
