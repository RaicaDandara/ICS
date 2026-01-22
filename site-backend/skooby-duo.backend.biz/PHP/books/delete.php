
<html>
	<?php
        include '../config/connection.php';
	?>  

	<body>

	<?php

	$query = 'DELETE FROM book WHERE book_id = '.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
			
	header("Location: main.php");

	?>
		
	<script type="text/javascript">
		alert("Successfully Deleted.");
        // importanteeeeee
		window.location = "index.php";
	</script>				
				
	</body>
</html>
