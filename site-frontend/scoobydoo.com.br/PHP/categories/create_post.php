
<html>

	<!-- essa desgraça não precisa de html (pq é um arquivo para o post). tirar dps -->

	<?php
        include '../config/connection.php';
	?>   

<body>

	<?php
	$name = $_POST['name'];
				
	$query = "INSERT INTO category
			(category_id, name)
			VALUES (NULL,'".$name."')";
	mysqli_query($db,$query) or die ('Error in Database: '.mysqli_error($db));
					
	header("Location: main.php?msg=added");

	?>

</body>

</html>

