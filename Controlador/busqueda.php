<?php
require 'connect.php';
$query = "SELECT Nombre FROM dispositivo";
$resul = mysqli_query ($conn, $query);


while ($r = mysqli_fetch_assoc($resul)) {
  echo $r['Nombre'];
}
 ?>
