<?php
$dsn = 'mysql:dbname=buscarinstruc;host=localhost;charset=utf8';
$usuario = 'root';
$contrasena = '';
try {
    $pdo = new PDO($dsn, $usuario, $contrasena);
    //  echo "conexion establecida";
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
