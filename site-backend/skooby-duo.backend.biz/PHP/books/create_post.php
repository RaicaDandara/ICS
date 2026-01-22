
<html>

	<!-- essa desgraça não precisa de html (pq é um arquivo para o post). tirar dps -->

	<?php
        include '../config/connection.php';
	?>   

<body>

	<?php
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
				
	$query = "INSERT INTO book
			(book_id, title, author, description)
			VALUES (NULL,'".$title."','".$author."','".$description."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	header("Location: main.php?msg=added");

	?>
	

</body>

</html>

