<?php
require 'connect.php';
if(isset($_REQUEST['id'])&&isset($_REQUEST['name'])&& isset($_REQUEST['brand']))
{
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $desc = $_REQUEST['des'];
  $brand = $_REQUEST['brand'];
}
$query = "UPDATE dispositivo SET nombre= '".$name."', descripcion= '".$desc."', marca = '".$brand."' WHERE idDis='".$id."' ";

if(mysqli_query($conn,$query))
{
  echo "Elemento eliminado";
}
else {
  echo "No se consiguio eliminar el dispositivo";
}

 ?>
