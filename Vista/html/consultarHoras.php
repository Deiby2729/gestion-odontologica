<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../Vista/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../Vista/jquery/jquery-ui.css">
    <script type="text/javascript" src="../Vista/jquery/jquery-1.11.3.min.js"></script>
    <script src="../Vista/jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="../Vista/js/script.js"></script>
	<title>Sistema de Gestión Odontológica</title>
</head>
<body>
<option value="-1" selected="selected">---Seleccione la hora---</option>
<?php 

	while ($fila = $result->fetch_object()) 
	{
?>
	<option><?php echo $fila->cithora ?></option>
	<?php
		}
	?>
</body>
</html>