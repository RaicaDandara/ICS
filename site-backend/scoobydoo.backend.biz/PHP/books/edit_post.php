<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$description = $_POST['description'];
		
        include '../config/connection.php';
		
		$query = 'UPDATE book set title ="'.$title.'",
				author ="'.$author.'", description ="'.$description.'" WHERE
				book_id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));

		header("Location: main.php?msg=updated");

							
		?>	

	</body>
</html>
