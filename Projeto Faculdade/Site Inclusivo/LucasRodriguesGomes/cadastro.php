<?php

require "conection.php";

$name = $_POST['nome'];
$senha = md5($_POST['senha']);

if(mysqli_query($con, "INSERT INTO professor(nome, senha) VALUES ('$name', '$senha');")){
    header("Location: index.php?login=cadastrado");
}else{
    header("Location: index.php?login=errocadastro");
}

?>