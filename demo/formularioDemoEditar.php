
<!DOCTYPE html>
<html>
<body>

<?php
//obtener el Id que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
echo "valor de id es".$id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);

print_r($ObjDemo);
?>

<h2>Editar objeto demo</h2>

<form action="actualizar.php" method="post">
id: <input type="text" name="id_demo" value="<?php echo $ObjDemo->getIdDemo();?>" readonly/>
<br>
nombre: <input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre();?>" autofocus required/>
<br>
tipo: <input type="text" name="tipo" value="<?php echo $ObjDemo->getTipo();?>" autofocus required/>
<br>
fechanacimiento: <input type="text" name="fechanacimiento" value="<?php echo $ObjDemo->getFechanacimiento();?>" autofocus required/>
<br>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar">
</form>

</body>
</html>
