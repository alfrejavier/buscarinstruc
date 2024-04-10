<?php

$query="SELECT * FROM ficha as f INNER JOIN instructor as i ON ficha.Instructor_cedula = instructor.cedula WHERE f.numero LIKE ? OR f.programa LIKE ? OR f.institucion LIKE ? OR f.municipio LIKE ? OR f.dia LIKE ? OR f.jornada LIKE ? OR i.nombre LIKE ? OR i.apellido LIKE ?";

$query="SELECT f.numero, f.programa, f.institucion, f.municipio, i.cedula, i.nombre, i.apellido FROM ficha f INNER JOIN instructor i ON f.Instructor_cedula=i.cedula WHERE f.numero LIKE ? OR f.programa LIKE ? OR f.institucion LIKE ? OR f.municipio LIKE ? OR f.dia LIKE ? OR f.jornada LIKE ? OR i.cedula LIKE ? OR i.nombre LIKE ? OR i.apellido LIKE ?";

$query="SELECT * FROM ficha WHERE numero LIKE ? OR programa LIKE ? OR institucion LIKE ? OR municipio LIKE ? OR dia LIKE ? OR jornada LIKE ?";

?>