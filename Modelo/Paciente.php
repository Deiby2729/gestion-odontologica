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
  
  class Paciente {
    private $PacIdentificacion;
    private $PacNombres;
    private $PacApellidos;
    private $PacFechaNacimiento;
    private $PacSexo;

    public function __construct($ide,$nom,$ape,$fNa,$sex) {
      $this -> PacIdentificacion = $ide;
      $this -> PacNombres = $nom;
      $this -> PacNpellidos = $ape;
      $this -> PacFechaNacimiento = $fNa;
      $this -> PacSexo = $sex;
    }

    public function obtenerIdentificacion() {
      return $this -> PacIdentificacion;
    }

    public function obtenerNombres() {
      return $this -> PacNombres;
    }

    public function obtenerApellidos() {
      return $this -> PacApellidos;
    }

    public function obtenerFechaNacimiento() {
      return $this -> PacFechaNacimiento;
    }

    public function obtenerSexo() {
      return $this -> PacSexo;
    }
  }
  ?>
</body>
</html>