<?php
include('db.php');

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$_SESSION['usuario']=$usuario;


$consulta="SELECT * FROM usuarios where dni='$usuario' and password='$contrasena'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
  $row = $resultado->fetch_row();
  $_SESSION['dni'] = $row[0];
  $_SESSION['apellidos'] = $row[2];
  $_SESSION['nombres'] = $row[3];
  $_SESSION['programa'] = $row[4];
  $_SESSION['turno'] = $row[5];
  $_SESSION['periodo'] = $row[6];
  header("location:bienvenida.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
