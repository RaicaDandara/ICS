
<?php
        include '../config/connection.php';
        include '../header.php';
?>
<body>

	<h1 class="page-header">
		CRUD das categoriasssssss
	</h1>
	
	<h2>List of categories</h2>
	<br/>
	<a href="create.php">Add New (CREATE)</a>
	<br/><br/>
	<table border="1"> 
		<thead>
			<tr>
				<th>name</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT * FROM category';
			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['name'].'</td>';
					echo '<td>';
						echo '<a href="detail.php?id='.$row['category_id'].'" >Detail (READ)</a><br/>';
						echo '<a href="edit.php?id='.$row['category_id'].'">Edit (UPDATE)</a><br/>';
						echo '<a href="delete.php?id='.$row['category_id'].'">Remove (DELETE)</a>';
					echo '</td>';
				echo '</tr> ';
			}
			?> 
                                    
		</tbody>
	</table>

	<script>
		<?php if ($_GET['msg'] == 'added'): ?>
			alert("successfully added");
		<?php elseif ($_GET['msg'] == 'updated'): ?>
			alert("Successfully updated!");
		<?php endif; ?>
	</script>


</body>

</html>
