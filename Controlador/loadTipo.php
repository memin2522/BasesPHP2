<!DOCTYPE html>
<html>
<head>
	<title>Dispositivos</title>
</head>
<body>

<?php
	//echo "Que quiere bobo php";
	$db = mysqli_connect("localhost","Memo","12345");
	$db->select_db("dispositivos");

  if (isset( $_POST['name']) ){
    $name =$_POST['name'];

    $sql ="INSERT INTO tipo(nombre) VALUES ('".$name."')";
    echo "Los datos han sido recibidos";
    if($db->query($sql)){
      echo "<br>Los datos han sido subidos satisfactoriamente<br>";
    }
  }
  else{
    echo "Los datos estan incompletos";
  }

?>
</body>
</html>
