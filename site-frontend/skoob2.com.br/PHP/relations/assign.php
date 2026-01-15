<?php
include '../config/connection.php';

$books = mysqli_query($db, "SELECT * FROM books");
$categories = mysqli_query($db, "SELECT * FROM categories");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Associar Livro e Categoria</title>
</head>
<body>

<h1>Associar livro a categoria</h1>

<form method="post" action="store.php">

  <label>Livro</label><br>
  <select name="book_id">
    <?php while ($b = mysqli_fetch_assoc($books)) { ?>
      <option value="<?= $b['book_id'] ?>">
        <?= $b['title'] ?>
      </option>
    <?php } ?>
  </select>

  <br><br>

  <label>Categoria</label><br>
  <select name="category_id">
    <?php while ($c = mysqli_fetch_assoc($categories)) { ?>
      <option value="<?= $c['category_id'] ?>">
        <?= $c['name'] ?>
      </option>
    <?php } ?>
  </select>

  <br><br>

  <button>Associar</button>
</form>

</body>
</html>
