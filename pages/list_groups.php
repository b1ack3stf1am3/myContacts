<h2>Groups</h2>
<table class="table">
	<thead>
		<tr>
			<th>Group</th>
			<th>Entries</th>
			<th>Changes</th>
		</tr>
	</thead>
	<tbody>
	<?php 	
	$conn=open_db();
	
	$sql="SELECT groups.*, COUNT(contact_id) AS
	 num_contacts FROM groups LEFT JOIN contacts ON
	 groups.group_id=contacts.group_id GROUP BY
	 groups.group_id ORDER BY num_contacts DESC, group_name";
	
	$results = $conn->query($sql);
	
	
	
	while(($group = $results->fetch_assoc()) != null) {
		extract($group);
		echo "<tr>";
		echo "<td class=\"\"><a href=\"./?p=group&id=$group_id\">$group_name</a></td>";
		echo "<td><span class=\"label label-inverse\">$num_contacts</span></td>";
		echo "<td class=\"\"><a href=\"./?p=form_edit_group&id=$group_id\"><i class=\"icon-edit\"></i>Edit</a>
			 <a href=\"actions/delete_group.php?id=$group_id\"><i class=\"icon-edit\"></i>Delete</a></td>";
		echo "</tr>";
	}
	$conn->close();?>
	</tbody>
</table>