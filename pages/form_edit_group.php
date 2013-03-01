<h2>Edit Groups</h2>
<?php 
	$conn=open_db();
	$sql = "SELECT * FROM groups WHERE group_id={$_GET['id']}";
	$results = $conn->query($sql);
	
	$group = $results->fetch_assoc();
	extract($group);
	$conn->close();
?>

<form class="form-horizontal" action="./actions/edit_group.php" method="post">
	<div class="control-group">
	    <div class="controls">
	    	<input type="hidden" name="group_id" value="<?php  echo $group_id?>" />
	    </div>
	</div>
	<div class="control-group">
	    <label class="control-label" for="group_name">Group name</label>
	    <div class="controls">
	    	<input type="text" name="group_name" value="<?php echo $group_name ?>">
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Add Group</button>
  		<button type="button" class="btn btn-small" type="button" onclick="window.history.go(-1)">Cancel</button>
	 </div>
</form>
