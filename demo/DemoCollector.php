<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM demo ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_demo'},$c{'nombre'},$c{'tipo'},$c{'fechanacimiento'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
  
  function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM demo where id_demo=? ", array("{$id}"));
    $ObjDemo = new Demo($row[0]{'id_demo'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0]{'fechanacimiento'}) ;       
    return $ObjDemo;        
  }

  function updateDemo($id,$nombre,$tipo,$fechanacimiento) {
    $insertrow = self::$db->updateRow("UPDATE FROM public.demo SET nombre = ?,  tipo = ?, fechanacimiento = ? WHERE id_demo = ?", array("{$nombre}","{$tipo}","{$fechanacimiento}",$id));
  }

  function deleteDemo($id) {
echo "hola".$id;
    $deleterow = self::$db->deleteRow("DELETE FROM public.demo WHERE id_demo = ?", array("{$id}"));
  }

}
?>

