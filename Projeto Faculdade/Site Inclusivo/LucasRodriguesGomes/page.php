<?php

require "conection.php";

$resumo = $_POST['tex'];
$rgm = $_POST['rgm'];

$query = "UPDATE dados SET resumo='$resumo' WHERE rgm=$rgm;";
mysqli_query($con, $query);
header("Location: Obrigado/obrigado.html")

?>