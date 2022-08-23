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
  class Controlador {
    public function verPagina($ruta) {
      require_once $ruta;
    }

    public function agregarCita($doc,$med,$fec,$hor,$con){
        $cita       = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada","Ninguna");
        $gestorCita = new GestorCita();
        $id         = $gestorCita->agregarCita($cita);
        $result     = $gestorCita->consultarCitaPorId($id);
        require_once 'Vista/html/confirmarCita.php';
    }

    public function consultarCitas($doc){
      $gestorCita = new GestorCita();
      $result     = $gestorCita->consultarCitasPorDocumento($doc);
      require_once 'Vista/html/consultarCitas.php';
    }

    public function cancelarCitas($doc){
      $gestorCita = new GestorCita();
      $result     = $gestorCita->consultarCitasPorDocumento($doc);
      require_once 'Vista/html/cancelarCitas.php';
  }
  }
  ?>
</body>
</html>