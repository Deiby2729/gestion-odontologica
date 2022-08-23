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
  class GestorCita {
    public function agregarCita(cita $cita) {
      $conexion = new Conexion();
      $conexion -> abrir();
      $CitFecha = $cita -> obtenerFecha();
      $CitHora = $cita -> obtenerHora();
      $CitPaciente = $cita -> obtenerPaciente();
      $CitMedico = $cita -> obtenerMedico();
      $CitConsultorio = $cita -> obtenerConsultorio();
      $CitEstado = $cita -> obtenerEstado();
      $sql = "INSERT INTO citas Values (null, '$CitFecha','$CitHora','$CitPaciente','$CitMedico','$CitConsultorio','$CitEstado')";
      $conexion -> consulta($sql);
      $citaId = $conexion -> obtenerCitaId();
      $conexion -> cerrar();
      return $citaId;
    }

    public function consultarCitaPorId($id) {
      $conexion = new Conexion();
      $conexion -> abrir();
      $sql = "SELECT pacientes.*, medicos.*, consultorios.*, citas.* FROM pacientes,medicos,consultorios,citas WHERE citas.CitPaciente = pacientes.PacIdentificacion AND citas.CitMedico = medicos.MedIdentificacion AND citas.CitNumero = $id";
      $conexion -> consulta($sql);
      $result = $conexion -> obtenerResult();
      $conexion -> cerrar();
      return $result;
    }

    public function consultarCitasPorDocumento($doc) {
      $conexion = new Conexion();
      $conexion -> abrir();
      $sql = "SELECT * FROM citas WHERE CitPaciente = '$doc' AND CitEstado = 'Solicitada'";
      $conexion -> consulta($sql);
      $result = $conexion -> obtenerResult();
      $conexion -> cerrar();
      return $result;
    }

    public function consultarPaciente($doc) {
      $conexion = new Conexion();
      $conexion -> abrir();
      $sql = "SELECT * FROM Pacientes WHERE PacIdentificacion = '$doc'";
      $conexion -> consulta($sql);
      $result = $conexion -> obtenerResult();
      $conexion -> cerrar();
      return $result;
    }

    public function agregarPaciente(Paciente $paciente) {
      $conexion = new Conexion();
      $conexion -> abrir();
      $identificacion = $paciente -> obtenerIdentificacion();
      $nombres =$paciente -> obtenerNombres();
      $apellidos =$paciente -> obtenerApellidos();
      $fechaNacimiento =$paciente -> obtenerFechaNacimiento();
      $sexo = $paciente -> obtenerSexo();
      $sql = "INSERT INTO pacientes VALUES ('$identificacion','$nombres','$apellidos','$fechaNacimiento','$sexo')";
      $conexion -> consulta($sql);
      $filasAfectadas = $conexion -> obtenerFilasAfectadas();
      $conexion -> cerrar();
      return $filasAfectadas;
    }

    public function consultarMedicos() {
      $conexion = new Conexion();
      $conexion -> abrir();
      $sql = "SELECT * FROM medicos";
      $conexion -> consulta($sql);
      $result = $conexion -> obtenerResult();
      $conexion -> cerrar();
      return $result;
    }
  }
  ?>
</body>
</html>