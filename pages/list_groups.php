<h2>Groups</h2>
<ul class="nav nav-tabs nav-stacked">
	<?php 
	$conn=open_db();
	$sql='SELECT * FROM groups ORDER BY group_name';
	$results = $conn->query($sql);
	
	while(($group = $results->fetch_assoc) != null) {
		extract($group);
	?>
	
	
	<?php };
	$conn->close();?>
</ul>