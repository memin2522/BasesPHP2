<!DOCTYPE html>
<html>
<head>
	<title>Dispositivos</title>
</head>
<body>

<?php
	//echo "Que quiere bobo php";
		require 'connect.php';


		//_POST. _GET, _REQUEST, _FILES
		if(isset($_POST['name'])&& isset($_POST['brand']) && isset($_POST['desc']) && is_uploaded_file($_FILES['modelo']['tmp_name'])){
		    $n=$_POST['name'];
		    $d=$_POST['desc'];
		    $m=$_POST['brand'];
		    $archivo=$_FILES['modelo']['tmp_name'];
		    $fp=fopen($archivo,"rb");
		    $contenido=fread($fp,$_FILES['modelo']['size']);
		    $contenido=addslashes($contenido);
		//
		$query="INSERT INTO dispositivo(nombre,descripcion,marca,modelo) values ('".$n."','".$d."','".$m."','".$contenido."')";
		if( mysqli_query ($conn,$query)){
		    echo "Se logro insertar el registro";
		}else{
		    echo "No logro insertar el registro";
		}
		}
		else {
			
			echo "<br>Datos incompletos";
		}
		?>



</body>
</html>
