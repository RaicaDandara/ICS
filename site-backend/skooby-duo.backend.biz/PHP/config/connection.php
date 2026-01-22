<?php
$host = 'localhost';
$user = 'skoob';
$pass = 'ifrn';          // senha vazia no XAMPP padrão
$db   = 'skoob2';    // nome do bd local

$db = mysqli_connect($host, $user, $pass, $db);

if (!$db) {
    die('Erro de conexão: ' . mysqli_connect_error());
}

mysqli_set_charset($db, 'utf8');
?>