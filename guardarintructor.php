<?php

include "conexion.php";

if (isset($_POST['enviar'])) {

$cedula= $_POST['cedula'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$profesion= $_POST['profesion'];
$movil= $_POST['movil'];

$query="INSERT INTO instructor(cedula,nombre,apellido,profesion,movil)values(?,?,?,?,?)"; 
$consulta=$pdo->prepare($query);
 if ($consulta->execute(array($cedula,$nombre,$apellido,$profesion,$movil))){
      echo "<script>alert('Instructor Registrado Correctamente');
        window.location.href='ficha.php';
        </script>";
  }else {
      echo "<script>alert('¡El Instructor ya existe!');
        window.location.href='';
        </script>";
        // $('#id_form')[0].reset();

  }
}
?>