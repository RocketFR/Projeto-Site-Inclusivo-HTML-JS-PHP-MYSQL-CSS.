<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nos conte sobre suas férias</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shoelace-css/1.0.0-beta16/shoelace.css"> -->
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <div class="container">
    <header id="nuvem-header">
      <img src="./src/left.png" />
      <h1>Minhas<br>Férias!</h1>
      <img src="./src/right.png" />
    </header>

    <div id="container-body">
      <aside id="left-aside"></aside>
      <div id="main-center">
        <div class="input-single">
          <form action="page.php" method="post">
            <input style="display: none;" type="text" name="rgm" value="<?=$_GET['rgm']?>">
            <textarea name="tex" id="note-textarea" placeholder="Conte como foi suas férias."></textarea>
            <input type="submit" value="Enviar">
          </form>
          <button id="start-record-btn" title="Start Recording">Start Recognition</button>
          <button id="pause-record-btn" title="Pause Recording">Pause Recognition</button>
        </div>
      </div>
      <aside id="right-aside"></aside>
    </div>

    <footer>
      <img src="./src/footer-decoration-1.png" class="decoration-1">

      <div class="side-side">
        <button class="microfone-icone">
          <!-- SVG do microfone integrado dentro do HTML -->
          <svg viewBox="0 0 3.4944443 5.6534483">
            <g>
              <path class="fil0" d="M 0.78,0.59 H 1.1 V 0.75 H 0.72 C 0.71,0.75 0.7,0.77 0.7,0.79 0.69,0.82 0.67,0.89 0.66,0.92 H 1.1 V 1.08 H 0.65 L 0.64,1.24 H 1.1 V 1.39 L 0.65,1.4 V 1.57 H 1.1 V 1.73 H 0.65 V 1.9 H 1.1 V 2.06 H 0.65 V 2.24 H 1.1 V 2.39 H 0.65 c 0,0.66 0.45,1.19 1.12,1.19 0.69,0 1.14,-0.53 1.14,-1.19 H 2.37 V 2.24 c 0.02,-0.01 0.47,0 0.54,0 V 2.06 H 2.37 V 1.9 H 2.91 V 1.73 c -0.08,0 -0.51,0.01 -0.54,0 V 1.57 H 2.91 V 1.4 C 2.84,1.39 2.39,1.4 2.37,1.39 V 1.24 H 2.91 V 1.08 H 2.37 V 0.92 H 2.89 C 2.88,0.87 2.86,0.8 2.84,0.75 H 2.37 V 0.59 h 0.4 C 2.62,0.24 2.15,0 1.78,0 1.41,0 0.93,0.24 0.78,0.59 Z" />
              <path class="fil0" d="m 1.5,4.28 v 0.89 c -0.2,0.01 -0.42,0 -0.62,0 -0.18,0 -0.3,0.2 -0.2,0.37 0.03,0.06 0.1,0.11 0.19,0.12 0,0 1.88,-0.01 1.88,-0.01 C 2.95,5.62 2.99,5.39 2.9,5.27 2.84,5.19 2.77,5.17 2.68,5.17 c -0.05,0 -0.6,0.01 -0.63,0 V 4.28 C 3.18,3.96 3.49,3.37 3.49,2.21 3.49,2.14 3.5,2.05 3.49,1.98 H 3.1 V 2.11 H 2.99 L 2.98,2.4 H 3.1 C 3.11,2.46 3.1,2.68 3.09,2.74 2.88,4.31 0.39,4.4 0.39,2.4 H 0.55 V 2.11 H 0.39 V 1.98 H 0 c 0,0.05 0,0.38 0,0.47 0,0.92 0.55,1.71 1.5,1.83 z" />
            </g>
          </svg>
        </button>

        <div id="papagaio">
          <div class="bubble">
            <img src="./src/message-bubble.png">
            <p>Nos diga mais sobre suas férias com sua linda voz!</p>
          </div>

          <img src="./src/parrot.png" class="parrot">
        </div>
      </div>

    </footer>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="fala.js"></script>
</body>

</html>

