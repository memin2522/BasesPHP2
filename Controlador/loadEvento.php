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

  if (isset( $_POST['ideven'],$_POST['dis'],$_POST['tipo'],$_POST['even'],$_POST['time']  ) ){
    $idE =$_POST['ideven'];
		$idD = $_POST['dis'];
		$idT = $_POST['tipo'];
		$even = $_POST['even'];
		$time = $_POST['time'];


    $sql ="INSERT INTO evento(idEvento,idDis,idTipo,evento,tiempo) VALUES ('".$idE."','".$idD."','".$idT."','".$even."','".$time."')";
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
