<?php

require 'connect.php';
$j=0;

for($i=0; $i<1000;$i++){
  $ele = rand(1,1000);
  $ele1 = rand(1,2);
  $ele2 = "10/5/2020";
  $ele3 = rand(500,1000);
  $query = "INSERT INTO dispositivo(Nombre,marca,URLPlugin,fechaAdquisicion,Descripcion) VALUES ('".$i."','evento:".$ele."','".$ele1."','".$ele2."','".$ele3."') ";
  if(mysqli_query ($conn, $query)){
    $j++;
  }
}
echo "inserciones ok: ".$j;
echo "inserciones no ok: ".(1000-$j);

 ?>
