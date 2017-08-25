<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<header>
<nav>
<a href="inicio.html">Inicio</a>
<a href="contacto.html">Contacto</a> 
<a href="nosotros.html">Nosotros</a>
<a href="servicios.html">Servicios</a>
<a href="formularioNuevoDemo.php">Nuevo</a>   
</nav>
</header>

<?php
if (isset($_SESSION ['MiSesion'])){
echo "<p> Hola usuario: (".$_SESSION['MiSesion'].")
[<a href = 'salir.php'>Salir</a>]";

include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo $c->getIdDemo() . "  && " .$c->getNombre(). "  && " .$c->getTipo(). "  && " .$c->getFechanacimiento();
  echo "<a href = 'formularioDemoEditar.php?id=".$c->getIdDemo()."'>Editar</a>";
  echo "<a href = 'eliminar.php?id=".$c->getIdDemo()."'>Eliminar<a>";                                     
  echo "</div>"; 
}

}
else{
?>

<form action="login.php" method="post">
id: <input type="text" name="id_demo" ><br>
nombre: <input type="text" name="nombre" ><br>
tipo: <input type="text" name="tipo" ><br>
fechanacimiento: <input data-format="yyyy-MM-dd" type="text" name="fechanacimiento" ><br>
<input type="submit" value="Enviar">
</form>
<?php }?>


</body>
</html>
