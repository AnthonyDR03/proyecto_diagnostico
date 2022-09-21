<!DOCTYPE html>
<html lang="en/es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carnet</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/stylewelcome.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  include('db.php');
  ?>
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
    <div class="container">
      <section class="carnet">
        <div class="logo-iestp"><img src="img/logoiestp.png" alt="" /></div>
        <div class="inforcarnet">

          <div class="datos-carnet">
            <div>
              <p>Apellidos y nombres:</p>
            </div>
            <div> <label for=""><?php echo $_SESSION['apellidos'] . ' ' . $_SESSION['nombres'] ?></label></div>
          </div>
          <div class="datos-carnet">
            <div>
              <p>Programa de Estudios:</p>
            </div>
            <div> <label for=""><?php echo $_SESSION['programa'] ?></label></div>
          </div>
          <div class="datos-carnet">
            <div>
              <p>Turno:</p>
            </div>
            <div> <label for=""><?php echo $_SESSION['turno'] ?></label></div>
          </div>
          <div class="datos-carnet">
            <div>
              <p>Periodo Académico:</p>
            </div>
            <div> <label for=""><?php echo $_SESSION['periodo'] ?></label></div>
          </div>
        </div>
      </section>
      <section class="estado-carnet">
        <div>
          <p>Tu estado es:</p>
          <div class="">
            <input class="btn <?php if ($_SESSION['estado'] == 0) echo 'btn-success'; else echo 'btn-danger';?>" 
              type="text" value="<?php if ($_SESSION['estado'] == 0)echo 'Buen estado'; else echo 'Mal estado';?>" readonly>
          </div>
        </div>
      </section>
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
            <li class="footer-hover"><a href="bienvenida.html">Inicio</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
</body>

</html>