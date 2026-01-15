
<?php
    include '../config/connection.php';
    include '../header.php';
	
?>  
<body>

	<h1 class="page-header">
		Edit book
	</h1>

	<?php 
	$query = 'SELECT * FROM category WHERE category_id ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['category_id'];
		$name= $row['name'];
	}
              
	?>

	<h2>Edit book</h2>

	<form method="post" action="edit_post.php">
                            
	    	<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="name" name="name" value="<?php echo $name; ?>"><br/><br/>
		
		<button type="submit" >Update book</button>
		<a href="main.php">Return</a>

	</form>  

	

</body>

</html>

