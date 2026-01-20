
<?php
    include '../config/connection.php';
	include('header.php');
?>  
<body>

	<h1 class="page-header">
		Edit book
	</h1>

	<?php 
	$query = 'SELECT * FROM book WHERE book_id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['book_id'];
		$title= $row['tit$title'];
		$author=$row['author'];
		$description=$row['description'];
	}
              
	?>

	<h2>Edit book</h2>

	<form method="post" action="edit_post.php">
                            
	    	<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="Title" name="title" value="<?php echo $title; ?>"><br/><br/>
		<input placeholder="Author" name="author" value="<?php echo $author; ?>"><br/><br/>
		
		
		<label>Description:</label><br/>
		<textarea name="description"><?php echo $description; ?></textarea>
		<button type="submit" >Update book</button>
		<a href="main.php">Return</a>

	</form>  
	
	
</body>

</html>

