<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<?php

include_once('db.php');
$usuario = $_SESSION['dni'];
$consulta = "SELECT usuarios.dni,usuarios.apellidos,usuarios.nombres,programas.programa,turnos.turno,periodos.periodo FROM `usuarios` join programas on programas.id=usuarios.programa_id join turnos on programas.turno_id=turnos.id join periodos on periodos.id=programas.periodo_id WHERE usuarios.dni='$usuario'";

$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    $row = $resultado->fetch_row();
    $dni = $row[0];
    $apellidos = $row[1];
    $nombres = $row[2];
    $programa = $row[3];
    $turno = $row[4];
    $periodo = $row[5];
    $consulta2 = "SELECT * FROM `resultados` WHERE dni='$usuario' and fecha = (select max(fecha) from resultados where dni= '$usuario')";
    $resultado2 = mysqli_query($conexion, $consulta2);
    $filas2 = mysqli_num_rows($resultado2);
    if ($filas2) {
        $row2 = $resultado2->fetch_row();
        $dni = $row2[0];
        $puntos = $row2[1];
        $fecha = $row2[2];
        $estado = $row2[3];
        $valido = date('Y-m-d', strtotime($fecha));
    if ($puntos >= 3)
        $estado = 0;
    else
        $estado = 1;
    if ($fecha >= date('Y-m-d'))
        $valido2 = 'Valido';
    else
        $valido2 = 'Caducado';
    
    ?>
    <div class="container">
        <div class="center-carnet">
        <section class="carnet">
            <div class="logo-iestp"><img src="img/logoiestp.png" alt="" /></div>
            <div class="inforcarnet">
                <div class="datos-carnet">
                        <div>
                            <p>Programa de Estudios:</p>
                        </div>
                        <div> <label for=""><?php echo $programa ?></label></div>
                    </div>
                <div class="datos-carnet">
                    <div>
                        <p>Apellidos y Nombres:</p>
                    </div>
                    <div> <label for=""><?php echo $apellidos . ' ' . $nombres ?></label></div>
                </div>
                <div class="datos-carnet">
                    <div>
                        <p>Periodo Académico:</p>
                    </div>
                    <div> <label for=""><?php echo $periodo ?></label></div>
                </div>
                <div class="datos-carnet">
                    <div>
                        <p>Turno:</p>
                    </div>
                    <div> <label for=""><?php echo $turno ?></label></div>
                </div>
            
                <div class="datos-carnet">
                    <div>
                        <p>Valido hasta:</p>
                    </div>
                    <div> <label for=""><?php echo $valido ?></label></div>
                </div>
                <div class="datos-carnet">
                    <div>
                        <p>Estado: </p>
                    </div>
                    <div> <label for=""><?php echo $valido2 ?></label></div>
                </div>
            </div>
            <div class="estado-carnet">
                <div>
                    <p>Condición actual:</p>
                    <div class="estadobtn">
                        <input class="btn btn-lg <?php if ($estado == 0) echo 'btn-success';
                                                    else echo 'btn-danger'; ?>" type="text" value="<?php if ($estado == 0) echo 'Buen estado de salid';
                                                                                                        else echo 'Mal estado de salud'; ?>" readonly>
                    </div>
                </div>
            </div>
        </section>

        </div>
        
    </div>
    <?php
    }}
    ?>