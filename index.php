<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista\css\style.css">
    <title>Sistema de Gestión Odontológica</title>
</head>
<body>
  <?php
  
  require_once 'Controlador/controlador.php';
  require_once 'Modelo/gestorcita.php';
  require_once 'Modelo/cita.php';
  require_once 'Modelo/paciente.php';
  require_once 'Modelo/conexion.php';
  
  $controlador = new Controlador();
  
  if( isset($_GET["accion"])){
    if($_GET["accion"] == "asignar"){
      $controlador->verPagina('Vista/html/asignar.php');
    } 
    if($_GET["accion"] == "consultar"){
      $controlador->verPagina('Vista/html/consultar.php');
    }
    if($_GET["accion"] == "cancelar"){
      $controlador->verPagina('Vista/html/cancelar.php');
    } 

    elseif($_GET["accion"] == "guardarCita"){
      $controlador->agregarCita($_POST["asignarDocumento"],
                                $_POST["medico"], 
                                $_POST["fecha"], 
                                $_POST["hora"],
                                $_POST["consultorio"]);
      } elseif ($_GET["accion"] == "consultarCita"){
        $controlador->consultarCitas($_POST["consultarDocumento"]);
    }

    elseif ($_GET['accion']=="cancelarCita") {
			$controlador->cancelarCitas($_POST["cancelarDocumento"]);
		}
    
  } else {
    $controlador->verPagina('Vista/html/inicio.php');
  }
  
  ?>
</body>
</html>