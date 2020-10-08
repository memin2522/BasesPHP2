<?php
require 'connect.php';
if(isset($_REQUEST['id']))
{
  $n = $_REQUEST['id'];
}
$query = "DELETE FROM dispositivo WHERE idDis = '".$n."' ";

if(mysqli_query($conn,$query))
{
  echo "Elemento eliminado";
}
else {
  echo "No se consiguio eliminar el dispositivo";
}

 ?>
