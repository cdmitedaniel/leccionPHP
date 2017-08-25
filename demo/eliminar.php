<!DOCTYPE html>
<html>
<body>

<?php


$id_demo=$_GET["id"];

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj->deleteDemo($id_demo);

echo "valor id :".htmlspecialchars($id_demo)."ha sido eliminado correctamente ";

?>

<a href="index.php">Volver al inicio</a>



</body>
</html>
