<?php
//echo $_POST['id'];
if(isset($_POST['id'])&& isset($_POST['se'])){
    $n=$_POST['id'];
    $d=$_POST['se'];
//
$query="INSERT INTO senal(idTipo,idDis) values ('".$d."','".$n."')";
//echo  $query;
if( mysqli_query ($conn,$query)){
    //echo  $query;
    header( 'Location: TypesD.php?id='.$_POST['id'] );
}else{
    echo "No logro insertar el registro";
}
}

 ?>
