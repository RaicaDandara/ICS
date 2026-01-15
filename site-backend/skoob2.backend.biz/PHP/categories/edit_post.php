<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$name = $_POST['name'];
		
        include '../config/connection.php';
		
		$query = 'UPDATE category set name ="'.$name.'"
				WHERE category_id ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));

		header("Location: main.php?msg=updated");

							
		?>	

	</body>
</html>
