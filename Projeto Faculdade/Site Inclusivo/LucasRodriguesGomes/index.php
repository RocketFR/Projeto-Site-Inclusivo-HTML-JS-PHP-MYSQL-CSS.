<html>
  <head>
    <meta charset="UTF-8" />
    <!--tag para que usuarios localizados em diferentes paises possam visualizar paginas cujo idioma contenha caracteres especiais-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Isso fornece ao navegador instrucoes sobre como controlar as dimensoes e o dimensionamento da pagina. -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- localizacao do style css. -->
    <title>Login</title>
    <!--titulo do site.-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <section class="area-login">
      <!-- reservando uma area generica para colocar os form de login -->
      <div class="login">
        <img src="src/Login.png" />
        <!-- link da imagem de enfeite -->

        <form action="aluno.php" method="post">
          <input type="text" name="nome" placeholder="Usuario" autofocus />
          <!-- local para inserir o nome de usuario com autofocus que ja deixa selecionado quando a pagina carrega -->
          <input type="password" name="senha" placeholder="Senha" />
          <!-- local para inserir a senha -->
          <input type="submit" value="ENTRAR" />
          <!-- botão para enviar-->
        </form>

        <a href="cadastrar.html"> Cadastrar </a>
        <!-- link para se cadastrar -->
        
        <?php

        if(isset($_GET['login'])){

          if($_GET['login'] === "erro"){?>

          <div>
            Login errado
          </div>
          
          <?php } ?>

          <?php if($_GET['login'] === "cadastrado"){?>

          <div>
            Cadastro realizado
          </div>

          <?php } ?>

          <?php if($_GET['login'] === "errocadastro"){?>

          <div>
            Cadastro não realizado
          </div>
          
          <?php } ?>

          <?php if($_GET['login'] === "errocadastro"){?>

          <div>
            RGM ou nome do aluno inválido
          </div>
          
          <?php }
        
        }?>

      </div>
    </section>
  </body>
</html>
