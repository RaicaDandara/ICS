<html>

    <!-- essa desgraça não precisa de html (pq é um arquivo para o post). tirar dps -->


    <?php
    include '../config/connection.php';
    include 'header.php';
    ?>

    <body>

    <?php
    $book_id = $_POST['book_id'];
    $category_id = $_POST['category_id'];

    // teste se já existe a associação do livro com aquela categoria 

    $query_test_repeted = "
    SELECT * FROM book_category
    WHERE book_id='".$book_id."' AND category_id='".$category_id."'
    ";
    
    $test = mysqli_query($db, $query_test_repeted);

    // se n existir, associa

    if(mysqli_num_rows($test) == 0) {

    $query = "
    INSERT INTO book_category (book_id, category_id)
    VALUES ('".$book_id."', '".$category_id."')";

    mysqli_query($db, $query) or die ('Error in Database: '.mysqli_error($db));

    header("Location: assign.php?msg=ok");

    }

    else{
        header("Location: assign.php?msg=exists");
    }
    exit;
    
    
    ?>


    </body>
    
</html>

