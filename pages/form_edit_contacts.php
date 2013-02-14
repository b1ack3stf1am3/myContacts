

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
	    	<?php echo input('contact_firstname','First Name')?>
	    	<?php echo input('contact_lastname','Last Name')?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="email">Email</label>
	    <div class="controls">
	    	<?php echo input('contact_email','Email')?>
	    </div>
	  </div>
	 <div class="control-group">
	    <label class="control-label" for="phone">Phone Number</label>
	    <div class="controls">
	    	<?php echo input('contact_phone1','xxx',null,'phone span1')?>
	    	<?php echo input('contact_phone2','xxx',null,'phone span2')?>
	    	<?php echo input('contact_phone3','xxxx',null,'phone span3')?>
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Edit Contact</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>
