<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../Vista/css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../Vista/jquery/jquery-ui.css">
    <script type="text/javascript" src="../Vista/jquery/jquery-1.11.3.min.js"></script>
    <script src="../Vista/jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="../Vista/js/script.js"></script>
  <title>Sistema de Gestión Odontológica</title>
</head>
<body>
  <div id="contenedor">
    <div id="encabezado">

    </div>
    <ul id="menu">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="index.php?accion=asignar">Asignar</a></li>
      <li  class="active"><a href="index.php?accion=consultar">Consultar Cita</a></li>
      <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
    </ul>

    <div id="contenido">
      <h2>Consultar Cita</h2>
      <form action="index.php?accion=consultarCita" method="post" id="frmconsultar">
        <table>
          <tr>
            <td>Documento del Paciente</td>
            <td><input type="text" name="consultarDocumento" id="consultarDocumento"></td>
          </tr>
          
          <tr>
            <td colspan="2"><input type="submit" name="consultarConsultar" value="Consultar" id="consultarConsultar"></td>
          </tr>
          
          <tr>
            <td colspan="2"><div id="paciente2"></div></td>
          </tr>
        
        </table>
      </form>
    </div>
  </div>
</body>
</html>