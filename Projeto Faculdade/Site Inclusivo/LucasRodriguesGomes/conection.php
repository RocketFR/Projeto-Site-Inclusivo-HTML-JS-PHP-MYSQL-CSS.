<?php


$con = mysqli_connect("localhost", "root", "");

try{
    $tem = mysqli_select_db($con, 'ferias');
    if(!$tem){
        throw new Exception;
    }else{
        $con = mysqli_connect("localhost", "root", "", "ferias");
    }
}catch(Exception $e){
    mysqli_query($con, "CREATE DATABASE ferias;");
    mysqli_select_db($con, 'ferias');
    mysqli_query($con, "CREATE TABLE dados(ID INT NOT NULL AUTO_INCREMENT, rgm INT, aluno VARCHAR(100), resumo VARCHAR(1000) NULL, PRIMARY KEY(ID));");
    mysqli_query($con, "CREATE TABLE professor(ID INT NOT NULL AUTO_INCREMENT, nome VARCHAR(100), senha VARCHAR(50), PRIMARY KEY(ID));");
    $con = mysqli_connect("localhost", "root", "", "ferias");
}

?>