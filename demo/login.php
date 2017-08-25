<?php
session_start();
?>

<?php
$_SESSION ['MiSesion'] = $_POST ['nombre'];
$nombre = $_POST ['nombre'] ;
$id_demo = $_POST ['id_demo'] ;

echo "usuario:" . $nombre . " y clave es:" . $id_demo;
echo "<a href = ' index.php' >Volver</a>";


?>
