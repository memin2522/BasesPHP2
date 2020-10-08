<?php

$query="Select * from dispositivo";
$result=mysqli_query ($conn,$query);//True/false-insert , array-select

echo '<div class="table-responsive row d-flex justify-content-center"> <table border="1" cellspacing="2" cellpadding="2" class="table-striped table-hover">
      <tr>
          <td> <font face="Arial">Id</font> </td>
          <td> <font face="Arial">Nombre</font> </td>
          <td> <font face="Arial">Descripcion</font> </td>
          <td> <font face="Arial">Marca</font> </td>
          <td> <font face="Arial">Modelo</font> </td>
          <td> <font face="Arial">Seleccionar</font> </td>
          <td> <font face="Arial">Registrar</font> </td>
          <td> <font face="Arial">Eliminar</font> </td>
      </tr>';

while ($r=mysqli_fetch_assoc($result)){
    $d1=$r['idDis'];
    $d2=$r['nombre'];
    $d3=$r['descripcion'];
    $d4=$r['marca'];
    echo '<tr>
                  <td>'.$d1.'</td>
                  <td>'.$d2.'</td>
                  <td>'.$d3.'</td>
                  <td>'.$d4.'</td>
                  <td><button onclick="enviar('.$r['idDis'].')">Imagen</button></td>
                  <td><button onclick="adicionar('.$r['idDis'].')">Registrar entrada</button></td>
                  <td><button onclick="seleccionar('.$d1.',\''.$d2.'\',\''.$d3.'\',\''.$d4.'\')">Seleccionar</button></td>
                  <td><button onclick="borrar('.$r['idDis'].')">Eliminar</button></td>

              </tr>';
   }
   echo '</table> </div>';

?>
