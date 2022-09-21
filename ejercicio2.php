<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
	<?php

	$pregunta1 = $_POST['PreguntaUno'];
	$pregunta2 = $_POST['PreguntaDos'];
	$pregunta3 = $_POST['PreguntaTres'];
	$pregunta4 = $_POST['PreguntaCuatro'];

	$mensaje = "No existe resultado";
	$puntos = 0;

	if ($pregunta1 == "no")
		$puntos = $puntos + 1;

	if ($pregunta2 == "no")
		$puntos = $puntos + 1;

	if ($pregunta3 == "si")
		$puntos = $puntos + 1;

	if ($puntos >= 3)
		$mensaje = "En este momento su situación no requiere asistencia sanitaria. Recuerde seguir manteniendo las recomendaciones generales de distanciamiento social, higiene y protección recomendadas.";
	else
		$mensaje = "El que presente algun sintoma y que haya estado en contacto con personas que no toman las memdidas de protección, puede<br> ser perjudicial para su salud, le recomendamos visitar un centro de salud.";

	echo "Resultado: $puntos <br> $mensaje <br>";
	?>
</body>