<?php
include '../config/connection.php';

$books = mysqli_query($db, "SELECT * FROM book");
$statuses = mysqli_query($db, "SELECT * FROM reading_status");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>status de leitura</title>
</head>
<body>

<h1>Status de leitura</h1>

<form method="post" action="assign_post.php">

  <label>Livro</label><br>
  <select name="book_id">
    <?php while ($b = mysqli_fetch_assoc($books)) { ?>
      <option value="<?= $b['book_id'] ?>">
        <?= $b['title'] ?>
      </option>
    <?php } ?>
  </select>

  <br><br>

  <label>Status</label><br>
  <select name="status_id">
    <?php while ($s = mysqli_fetch_assoc($statuses)) { ?>
      <option value="<?= $s['status_id'] ?>">
        <?= $s['name'] ?>
      </option>
    <?php } ?>
  </select>

  <br><br>

  <button>Salvar</button>
</form>



</body>
</html>
