 <?php
require 'connect.php';
echo($_REQUEST['nom']);
if(isset($_REQUEST['id'])&&isset($_REQUEST['nom'])&& isset($_REQUEST['mar']))
{
  $id = $_REQUEST['id'];
  $name = $_REQUEST['nom'];
  $desc = $_REQUEST['des'];
  $brand = $_REQUEST['mar'];
  $query = "UPDATE dispositivo SET nombre= '".$name."', descripcion= '".$desc."', marca = '".$brand."' WHERE idDis='".$id."' ";
  if(mysqli_query($conn,$query))
  {
    echo "Se actualizo el registro";
  }
  else {
    echo "No se actualizo el registro";
  }
}
else {
  echo "Los datos estan incompletos";
}



 ?>
