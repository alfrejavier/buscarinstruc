<!-- no esta en función, lo metí dentro del buscarproducto -->
<?php

include ('conexion.php');

$buscar=$_POST['buscar'];
$buscar= "%$buscar%";

$query="  SELECT i.cedula,i.nombre,i.apellido, 
      f.numero,f.programa,f.institucion,f.municipio,f.dia
  FROM instructor as i
  INNER JOIN instructor_has_ficha
     ON instructor_has_ficha.Instructor_cedula = i.cedula 
  INNER JOIN ficha as f
     ON instructor_has_ficha.Ficha_numero = f.numero  
  WHERE i.cedula LIKE ? OR i.nombre LIKE ? OR i.apellido LIKE ? OR f.numero LIKE ? OR f.programa LIKE ? OR f.institucion LIKE ? OR f.municipio LIKE ? OR f.dia LIKE ? ";

// $query="SELECT f.numero,i.nombre,i.apellido,f.programa,f.institucion,f.municipio,f.dia FROM ficha f 
 // INNER JOIN instructor i ON f.Instructor_cedula=i.cedula 
 // WHERE i.cedula LIKE ? OR i.nombre LIKE ? OR i.apellido LIKE ? OR f.numero LIKE ? OR f.institucion LIKE ? OR f.municipio LIKE ? OR f.jornada LIKE ? OR f.dia LIKE ?";

$consulta=$pdo->prepare($query);
$consulta->bindParam(1,$buscar);
$consulta->bindParam(2,$buscar);
$consulta->bindParam(3,$buscar);
$consulta->bindParam(4,$buscar);
$consulta->bindParam(5,$buscar);
$consulta->bindParam(6,$buscar); 
$consulta->bindParam(7,$buscar);
$consulta->bindParam(8,$buscar);
// $consulta->bindParam(9,$buscar);
$consulta->execute();
// $consulta->execute(array('$buscar'));
?>