<?php

require "conection.php";

$rgm = $_POST['rgm'];
$aluno = $_POST['aluno'];

$query = mysqli_query($con, "SELECT * FROM dados WHERE rgm='$rgm' AND aluno='$aluno';");
$resumo = mysqli_fetch_object(mysqli_query($con, "SELECT resumo FROM dados WHERE rgm='$rgm' AND aluno='$aluno';"));

if($query -> num_rows >= 1){?>

    <html>
  <head>
    <title>Aluno: <?=$aluno?></title>
    <link href="Obrigado/css/style.css" rel="Stylesheet" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0,maximum-scale=1.0"
    />
  </head>
  <body>
    <header>
      <div style="text-align: center; max-width: 75rem; margin: 0 auto;">
        <h1>Resumo do <?=$aluno?></h1>
        <div class="obrigado"><p><br><br><?=$resumo -> resumo?></p></div>
      </div>
    </header>
    <div class="voltar">
      <a href="index.php">VOLTAR</a>
    </div>
  </body>
</html>

<?php 
}else{
    header("Location: index.php?login=buscaerrada");
}

?>