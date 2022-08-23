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
  
  class cita {
    private $CitNumero;
    private $CitFecha;
    private $CitHora;
    private $CitPaciente;
    private $CitMedico;
    private $CitConsultorio;
    private $CitEstado;

    public function __construct($num,$fec,$hor,$pac,$med,$con,$est) {
      $this -> CitNumero = $num;
      $this -> CitFecha = $fec;
      $this -> CitHora = $hor;
      $this -> CitPaciente = $pac;
      $this -> CitMedico = $med;
      $this -> CitConsultorio = $con;
      $this -> CitEstado = $est;
    }

    public function obtenerNumero() {
      return $this -> CitNumero;
    }

    public function obtenerFecha() {
      return $this -> CitFecha;
    }

    public function obtenerHora() {
      return $this -> CitHora;
    }

    public function obtenerPaciente() {
      return $this -> CitPaciente;
    }

    public function obtenerMedico(){
      return $this -> CitMedico;
    }

    public function obtenerConsultorio() {
      return $this -> CitConsultorio;
    }

    public function obtenerEstado() {
      return $this -> CitEstado;
    }
  }
  ?>
</body>
</html>