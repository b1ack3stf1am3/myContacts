<h2>Contacts</h2>
<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
<?php 
// Connect to DB
$conn=open_db();

// Query DB
$sql = 'SELECT * FROM contacts ORDER BY contact_lastname, contact_firstname';
$results = $conn->query($sql);

// Loop over result set, displaying contacts
while(($contact = $results->fetch_assoc()) != null) {
	extract($contact);
	?>
	<tr>
		<td><?php echo $contact_firstname ?> <?php echo $contact_lastname ?></td>
		<td><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></td>
		<td><a href="tel:<?php echo $contact_phone ?>"><?php echo format_phone($contact_phone)?></a></td>
		<?php echo "<td><a href=\"./?p=form_edit_contacts&id=$contact_id\"><i class=\"icon-edit\"></i>Edit</a> <a href=\"actions/delete_contact.php?id=$contact_id\"><i class=\"icon-edit\"></i>Delete</a></td>"?>
	</tr>
<?php };

//Close DB connection
$conn->close();
?>
	</tbody>
</table>