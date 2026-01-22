
<html>

	<!-- essa desgraça não precisa de html (pq é um arquivo para o post). tirar dps -->

	<?php
        include '../config/connection.php';
	?>   

<body>

	<?php
	
    $book_id = $_POST['book_id'];
    $status_id = $_POST['status_id'];

    $query_delete = "DELETE FROM book_status WHERE book_id='".$book_id."'";

    // remover o status de antes 

    mysqli_query($db, $query_delete);

	$query = "INSERT INTO book_status
			(book_id, status_id)
			VALUES ('".$book_id."','".$status_id."')";
	mysqli_query($db, $query) or die ('Error in Database: '.mysqli_error($db));
					
	header("Location: ../books/main.php?msg=statusadded");

	?>

</body>

</html>

