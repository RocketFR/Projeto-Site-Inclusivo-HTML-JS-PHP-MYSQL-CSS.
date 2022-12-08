<?php

require "conection.php";

$name = $_POST['nome'];
$senha = md5($_POST['senha']);


$query = mysqli_query($con, "SELECT * FROM professor WHERE nome='$name' AND senha='$senha';");

$query->num_rows >= 1?header("Location: aluno.html"):header("Location: index.php?login=erro");

?>