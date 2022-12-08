<?php

require "conection.php";

$rgm = $_POST['rgm'];
$aluno = $_POST['aluno'];

if(mysqli_query($con, "INSERT INTO dados(rgm, aluno) VALUES ('$rgm','$aluno');")){
    header("Location: projeto.php?rgm=$rgm");
}

?>