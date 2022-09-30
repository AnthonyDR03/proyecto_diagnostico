<?php
include_once('db.php');
?>
<!DOCTYPE html>
<html lang="en/es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/stylewelcome.css" />
  <link rel="stylesheet" type="text/css" href="https://stackoverflow.com/questions/11855535/style.css" />

</head>

<body>

  <header class="header">
    <nav class="nav">
      <ul>
        <a class="titulo-nav">TRIAJE DIARIO V1.0</a>
      </ul>
      <ul class="end-sesion">
        <a href="salir.php">Cerrar sesión</a>
      </ul>
    </nav>
  </header>
  <main class="main">

    <div class="container">
      <p style="text-align: center;">Bienvenido <b style="color: #c00000;">
          <?php echo $_SESSION['apellidos'] . ' ' . $_SESSION['nombres'] ?></b> a nuestro triaje diario virtual
        .</p>
       
      <?php
      include('tarjeta_carnet.php');
      ?>
      <br>
      <div class="prueba">
        <p> Se pide contestar a las siguientes preguntas, con honestidad, la cual nos garantice nuestro estado de salud para poder ingresar a la IESTP "TRUJILLO"</p>
        <div class="btnresponder">
          <input type="submit" value="Responder test de preguntas" onclick="location.href='formulario.html';" />
        </div>
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
            <li class="footer-hover"> <a href="bienvenida.html">Preguntas Frecuentes</a> </li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
</body>


</html>