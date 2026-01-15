<html>

    <?php
    include '../config/connection.php';
    ?>

    <body>

    <?php
    $book_id     = $_POST['book_id'];
    $category_id = $_POST['category_id'];

    $query = "
    INSERT INTO book_category (book_id, category_id)
    VALUES ('".$book_id."', '".$category_id."')";

    mysqli_query($db, $sql) or die ('Error in Database: '.mysqli_error($db));

    echo "Livro associado à categoria";

    header("Location: assign.php");


    </body>
    
</html>

