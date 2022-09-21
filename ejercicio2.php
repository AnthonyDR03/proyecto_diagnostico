<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<?php



    $pregunta1 = $_POST['PreguntaUno'];
	$pregunta2 = $_POST['PreguntaDos'];
	$pregunta3 = $_POST['PreguntaTres'];
	
	$mensaje = "";
	$mensaje2="";
	$puntos = 0;
	$puntos1;
	$puntos2;
	$puntos3;
	$puntos_total;
	if(($pregunta1 == "")||($pregunta2 == "")||($pregunta3 == "")){
		$mensaje2="Debe marcar todo";
		echo "Resultado:  $mensaje2 <br>"; 
	}	
    else
    if(($pregunta1 != "")||($pregunta2 != "")||($pregunta3 != "")){
		
	
	if($pregunta1 == "no"){
		
		$puntos1=$puntos+1;
	}
	else
		if($pregunta1 == "si"){
			$puntos1=$puntos+0;
		}
	if($pregunta2 == "no"){
		
		$puntos2=$puntos+1;
	}
	else
		if($pregunta2 == "si"){
			$puntos2=$puntos+0;
		}	
    if($pregunta3 == "si"){
		
		$puntos3=$puntos+1;
	}
	else
		if($pregunta3 == "no"){
			$puntos3=$puntos+0;
		}
		
	$puntos_total=$puntos1+$puntos2+$puntos3;	
		
		if($puntos_total >= 3){
			
			$mensaje="En este momento su situación no requiere asistencia sanitaria. Recuerde seguir manteniendo las recomendaciones generales de distanciamiento social, higiene y protección recomendadas.";
		}
		else
			if($puntos_total <= 2){
			
			$mensaje="El que presente algun sintoma y que haya estado en contacto con personas que no toman las memdidas de protección, puede<br> ser perjudicial para su salud, le recomendamos visitar un centro de salud.";
		}
		
		echo "Resultado: $puntos_total <br> $mensaje <br>";
	
	}		
?> 
</body>