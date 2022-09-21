<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en/es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="stylewelcome.css" />
</head>

<body>
  <header class="header">
    <nav class="nav">
      <ul>
        <a class="titulo-nav">TRIAJE DIARIO V1.0</a>
      </ul>
    </nav>
  </header>
  <main class="main">
    <div class="container" style="text-align: center;">

      <p>Bienvenido <b style="color: #c00000;"> <?php echo $_SESSION['nombres'] ?></b> a nuestro triaje diario virtual</p>
      <p>Se pide contestar a las siguientes preguntas, con honestidad, la cual nos garantize nuestro estado de salud y poder ingresar a la IESTP.</p>
      <p>[IMAGEN DE PERSONA EN PC LLENANDO EL FORMULARIO-ETC]</p>

      <br>
      <br>
      <div class="btnresponder">
        <input type="submit" value="Responder test de preguntas" onclick="location.href='formulario.html';" />
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="container-footer">
      <div>©VI Semestre Desing</div>
      <div class="footer-hover"> <a href="">Política de Privacidad</a></div>
      <div>
        <nav class="nav-footer">
          <ul>
            <li class="footer-hover"><a href="https://www.iestptrujillo.edu.pe/" target="_blank">IESP Trujillo</a> </li>
            <li class="footer-hover"> <a href="bienvenida.html">Inicio</a> </li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
</body>

</html>