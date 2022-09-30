<!DOCTYPE html>
<html lang="en/es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carnet</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/stylewelcome.css" />
</head>

<body>

  <header class="header">
    <nav class="nav">
      <ul></ul>
      <ul>
        <a class="titulo-nav">CARNET</a>
      </ul>
      <ul class="end-sesion">
        <a href="salir.php">Cerrar sesión</a>
      </ul>
    </nav>
  </header>
  <main class="container">
    <?php
    include('tarjeta_carnet.php');
    ?>
    <br>
    <p><?php echo $_SESSION['mensaje'] ?></p>
    </div>
  </main>
  <footer class="footer">
    <div class="container-footer">
      <div>©VI Semestre Desing</div>
      <div class="footer-hover"><a href="">Política de Privacidad</a></div>
      <div>
        <nav class="nav-footer">
          <ul>
            <li class="footer-hover">
              <a href="https://www.iestptrujillo.edu.pe/" target="_blank">IESP Trujillo</a>
            </li>
            <li class="footer-hover"><a href="bienvenida.html">Preguntas Frecuentes</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
</body>

</html>