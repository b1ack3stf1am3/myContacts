<h2>Add Groups</h2>
<form class="form-horizontal" action="./actions/add_group.php" method="post">
	<div class="control-group">
	    <label class="control-label" for="group_name">Group name</label>
	    <div class="controls">
	    	<?php echo input('group_name','Name')?>
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Add Group</button>
  		<button type="button" class="btn btn-small" type="button" onclick="window.history.go(-1)">Cancel</button>
	 </div>
</form>
