<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <script type="text/javascript" src="../jquery/jquery-3.2.1-min.js"></script>
  <title>Sistema de Gestión Odontológica</title>
</head>
<body>
  <div id="contenedor">
    <div id="encabezado">

    </div>
    <ul id="menu">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="index.php?accion=asignar">Asignar</a></li>
      <li><a href="index.php?accion=consultar">Consultar Cita</a></li>
      <li  class="active"><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
    </ul>

    <div id="contenido">
      <h2>Cancelar Cita</h2>
      <form action="index.php?accion=cancelarCita" method="post" id="frmcancelar">
        <table>
          <tr>
            <td>Documento del Paciente </td>
            <td><input type="text" name="cancelarDocumento" id="cancelarDocumento"></td>
          </tr>
          
          <tr>
            <td colspan="2"><input type="submit" name="cancelarConsultar" value="Consultar" id="cancelarConsultar"></td>
          </tr>
          
          <tr>
            <td colspan="2"><div id="paciente3"></div></td>
          </tr>
          
        </table>
      </form>
    </div>
  </div>
</body>
</html>