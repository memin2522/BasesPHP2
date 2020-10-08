<?php
//Credenciales
define('host','localhost');
define('user','Memo');
define('pass','12345');
define('db','dispositivos');

function connect(){
  $conn = mysqli_connect(host,user,pass,db);
  if(mysqli_connect_errno($conn)){
    die("Se cierra la conexion".mysqli_connect_error() );
  }
  mysqli_set_charset($conn,"uft8");
  return $conn;
}

$conn = connect();
 ?>
