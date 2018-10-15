<!DOCTYPE html>
<html lang="es">
<head>
	<title> Promedios ISC</title>
</head>
<meta charset="utf-8">
<body>
	<h1>PROMEDIO FUNCIONES Y ARREGLOS PHP</h1>
	<?php

	function promedioGeneral($v){
		$resultado=0;
		 $cont=0;
		foreach ($v as $calif ) {
		for ($i=0; $i < sizeof($calif); $i++) { 
		//echo "<br>".$calif[$i];
			$cont++;
			$resultado+=$calif[$i];
	}
	}
	
	
	 $promedio=$resultado/$cont;
	echo "<br> Promeio General ".$promedio;
	echo "<hr />";
	}//funcion promedio general




	function promedioAlumno($v){
		$promedio1;
	$resultado1=0;
		 $cont1=0;

		foreach($v as $calif => $detalles){
	echo "<h1> $calif </h1>";
 
    foreach($detalles as $indice => $valor){
		echo "<p> $valor </p>";
		for ($i=0; $i < 10; $i++) { 
		//echo "<br>".$calif[$i];
			$cont1++;
			$resultado1+=$valor;

		}
	}
	$promedio1=$resultado1/$cont1;
	$cont1=0;
	$resultado1=0;
	echo "<br>  Promedio $calif ".$promedio1;
}
	
	echo "<hr />";

	}//promedio alumno




	function promedioMateria($v){
		$promedio1;
	$resultado1=0;
		 $pr=0;
		 $pr1=0;
		 $pr2=0;
		 $pr3=0;
		 $pr4=0;
		 $pr5=0;
		

		foreach($v as $calif => $detalles){
	//echo "<h1> $calif </h1>";
 
    foreach($detalles as $indice => $valor){
		 
			if ($indice==0) {
			$pr+=$valor;
			$prM=$pr/10;

		}else if ($indice==1) {
			$pr1+=$valor;
			$prM1=$pr1/10;

		}else if ($indice==2) {
			$pr2+=$valor;
			$prM2=$pr2/10;

		}else if ($indice==3) {
			$pr3+=$valor;
			$prM3=$pr3/10;

		}else if ($indice==4) {
			$pr4+=$valor;
			$prM4=$pr4/10;

		}else if ($indice==5) {
			$pr5+=$valor;
			$prM5=$pr5/10;

		}
		
			
		}
		
		
	}
	
	echo "<br>  Promedio Materia 1  ".$prM;
	echo "<br>  Promedio Materia 2  ".$prM1;
	echo "<br>  Promedio Materia 3  ".$prM2;
	echo "<br>  Promedio Materia 4  ".$prM3;
	echo "<br>  Promedio Materia 5  ".$prM4;
	echo "<br>  Promedio Materia 6  ".$prM5;
	


	
	echo "<hr />";

	}//promedio Materia





	function mejorPromedio($v){

		$resultado=0;
		 $cont=0;
		foreach ($v as $calif ) {
		for ($i=0; $i < sizeof($calif); $i++) { 
		//echo "<br>".$calif[$i];
			$cont++;
			$resultado+=$calif[$i];
	}
	}
	
	
	 $promedio=$resultado/$cont;



	 /////////////*************///////////
	 $promedio1;
	$resultado1=0;
		 $cont1=0;
		 $cont2=0;
		 $pos=0;

	 foreach($v as $calif => $detalles){
	//echo "<h1> $calif </h1>";
 
    foreach($detalles as $indice => $valor){
		//echo "<p> $valor </p>";
		for ($i=0; $i < 10; $i++) { 
		//echo "<br>".$calif[$i];
			$cont1++;
			$resultado1+=$valor;

		}
	}
	$promedioAlu[$cont2]=$resultado1/$cont1;
	$posicion=$resultado1/$cont1;
	$pos1=$resultado1/$cont1;
	
	if ($pos1>$promedio) {
		
		$nom=$calif;
		echo "<p> Promedio mayores al promedio del grupo de :$nom $pos1 </p>";
		$pos1=$posicion;
		
	}
	if ($pos<$posicion) {
		
		$nom1=$calif;

		$pos=$posicion;
		
	}
	
	$cont1=0;
	$resultado1=0;
	
	$cont2++;

	 
}
			sort($promedioAlu);
		echo "<p> Mejor promedio:$nom1 $promedioAlu[9] </p>";



	}////mejor promedio



	/*function ordenarVector($v){
		sort($v);
		
	}*/

	
	?>

	<div style="border: 1px solid red">
		<?php
		$calificacionesSemestrales= array("Manuel" => $calificaciones = array(60,60,70,60,58,60),
										"Tino" => $calificaciones = array(70,60,72,85,90,100),	
										"Jose" => $calificaciones = array(85,80,90,70,60,58),
										"leo" => $calificaciones = array(56,75,90,98,60,72),
										"Bryan" => $calificaciones = array(85,80,90,70,60,58),
										"Gonzalo" => $calificaciones = array(100,80,100,70,78,75),
										"Liza" => $calificaciones = array(85,70,52,90,52,58),
										"Pepe" => $calificaciones = array(100,50,91,50,70,50),
										"Octa" => $calificaciones = array(93,93,92,89,87,99),
										"Lorena" => $calificaciones = array(85,60,86,70,78,76)
									);
		
		
		promedioGeneral($calificacionesSemestrales);
		promedioAlumno($calificacionesSemestrales);
		promedioMateria($calificacionesSemestrales);
		mejorPromedio($calificacionesSemestrales);

		?>

		
	</div>

	

</body>
</html>