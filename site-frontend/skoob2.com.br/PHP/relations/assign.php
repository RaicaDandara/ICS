<?php
include '../config/connection.php';
include '../header.php';

$books = mysqli_query($db, "SELECT * FROM book");
$categories = mysqli_query($db, "SELECT * FROM category");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Associar Livro à Categoria</title>
</head>
<body>

<h1>Associar livro à categoria</h1>

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

<?php if (isset($_GET['msg'])): ?>
<script>
  <?php if ($_GET['msg'] == 'ok'): ?>
      alert("Livro associado à categoria");
  <?php elseif ($_GET['msg'] == 'exists'): ?>
      alert("Associação já existente");
  <?php endif; ?>
</script>

<?php endif; ?>

</body>
</html>
