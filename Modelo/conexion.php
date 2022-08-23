<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Gestión Odontológica</title>
</head>
<body>
  <?php
  class Conexion {
    private $mySQLI;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $citaId;

    public function abrir() {
      $this -> mySQLI = new mysqli("localhost","root","","db_citas");
      if (mysqli_connect_error()) {
        return 0;
      } else {
        return 1;
      }
    }

    public function cerrar() {
      $this -> mySQLI -> close();
    }

    public function consulta($sql) {
      $this -> sql = $sql;
      $this -> result = $this -> mySQLI -> query ($this -> sql);
      $this -> filasAfectadas = $this -> mySQLI -> affected_rows;
      $this -> citaId = $this -> mySQLI -> insert_id;
    }

    public function obtenerResult() {
      return $this -> result;
    }

    public function obtenerFilasAfectadas() {
      return $this -> filasAfectadas;
    }

    public function obtenerCitaId() {
      return $this -> citaId;
    }
  }
  ?>
</body>
</html>