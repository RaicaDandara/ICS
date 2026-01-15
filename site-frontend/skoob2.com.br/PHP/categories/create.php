
<?php
       
        include '../config/connection.php';
        include '../header.php';

?>  
<body>
	<h1 class="page-header">
		create
	</h1>

	<h2>Add New book</h2>
	<br/>
	<form method="post" action="create_post.php">
                            
		<input placeholder="Category's name" name="name"><br/><br/>
		
		<button type="submit" class="btn btn-success">Save category</button>&nbsp;
		<button type="reset" class="btn btn-warning">Cancel</button>&nbsp;
		<a class="btn btn-info" href="main.php">Return</a>

	</form>  

	

</body>

</html>

