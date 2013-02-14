<h2>Add Contacts</h2>
<form class="form-horizontal" action="./actions/add_contact.php" method="post">
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
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Add Contact</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>
