
<?php
       include '../config/connection.php';
       include '../header.php';
?>  
<body>

	<h1 class="page-header">
		details 
	</h1>

	<?php 
	$query = 'SELECT * FROM book WHERE book_id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['book_id'];
                $title = $row['title'];
                $author = $row['author'];
                $description = $row['description'];             
  	}
              
	?>

	<h2>Detailed Record</h2>
	<table>
		<tbody>
			<tr>
				<td><strong>Id:</strong></td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td><strong>title:</strong></td>
				<td><?php echo $title; ?></td>
			</tr>
			<tr>
				<td><strong>author:</strong></td>
				<td><?php echo $author; ?></td>
			</tr>
			<tr>
				<td><strong>description::</strong></td>
				<td><?php echo $description; ?></td>
			</tr>
		</tbody>
	</table>
	<a href="main.php">Return</a></td>

</body>

</html>

