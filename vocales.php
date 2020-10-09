Código: [Seleccionar]
<!DOCTYPE html>
<html>
	<head>
		<title>201115321 Informatica</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Apartado a</h1>
		<?php
			$texto = 'Universidad de San Carlos';
			$vocales = ['a', 'e', 'i', 'o', 'u'];
			$msg = ' Numero de veces que se repiten las vocales en la cadena de texto:<br/>' . $texto . '<br/>';
			for($i = 0; $i < count($vocales); $i++) {
				$msg = $msg . 'La letra ' . $vocales[$i] . ' aparece ' . substr_count($texto, $vocales[$i]) . ' veces.<br/>';
			}
			echo ($msg);
		?>
		
	</body>
</html>	