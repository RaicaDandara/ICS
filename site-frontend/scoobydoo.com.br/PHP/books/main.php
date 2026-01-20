<html>
<?php
        include '../config/connection.php';
        include '../header.php';
?>
<body>

	<h1 class="page-header">
		CRUD dos livros
	</h1>
	
	<h2>List of books</h2>
	<br/>
	<table border="1"> 
		<thead>
			<tr>
				<th>title</th>
				<th>author</th>
				<th>status</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			<?php                  
			$query = 'SELECT 
				b.book_id,
				b.title,
				b.author,
				s.name AS status_name
				FROM book b
				LEFT JOIN book_status bs ON b.book_id = bs.book_id
				LEFT JOIN reading_status s ON bs.status_id = s.status_id';

			$result = mysqli_query($db, $query) or die (mysqli_error($db));

			while ($row = mysqli_fetch_assoc($result)) {
                                
				echo '<tr>';
					echo '<td>'. $row['title'].'</td>';
					echo '<td>'. $row['author'].'</td>';
					echo '<td>'.($row['status_name']??'No status').'</td>';
					echo '<td>';
						echo '<a href="detail.php?id='.$row['book_id'].'" >Detail (READ)</a><br/>';
						echo '<a href="../status/assign.php?id='.$row['book_id'].'">status (update(i think))</a>';
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
		<?php elseif ($_GET['msg'] == 'statusadded'): ?>
			alert("Status successfully added")
		<?php endif; ?>
	</script>


</body>

</html>
