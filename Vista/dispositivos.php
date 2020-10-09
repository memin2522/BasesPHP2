<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <title>Dispositivos</title>
  </head>
  <body>
    <script>
      function enviar(str)
      {

        if (str.length == 0) {
        //document->html
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        //AJAX
        var xmlhttp = new XMLHttpRequest();//->No cambian
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {//NO cambia
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../Controlador/modelo3d.php?id=" + str, true);
        xmlhttp.send();
      }
    }


      function adicionar(str)
      {
        window.open("TypesD.php?id="+str, "_self");
      }

      function seleccionar(a,b,c,d)
      {
        document.getElementById("id").value = a;
        document.getElementById("name").value=b;
        document.getElementById("desc").value=c;
        document.getElementById("brand").value=d;
      }

      function borrar(str)
      {
          if (str.length == 0) {
          //document->html
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          //AJAX
          var xmlhttp = new XMLHttpRequest();//->No cambian
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {//NO cambia

                document.getElementById("txtHint").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "../Controlador/delete.php?id=" + str, true);
          xmlhttp.send();
        }
      }

      function actualizar(str) {
    var id=document.getElementById("id").value;
    var nom=document.getElementById("name").value;
    var des=document.getElementById("desc").value;
    var marca=document.getElementById("brand").value;
    if (str.length == 0) {
        //document->html
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        //AJAX
        var xmlhttp = new XMLHttpRequest();//->No cambian
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {//NO cambia
              window.open("dispositivos.php", "_self");
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../Controlador/actualizar.php?id="+id+"&nom="+nom+"&des="+des+"&mar="+marca, true);
        xmlhttp.send();
}
    //window.open("TypesD.php?id="+str, "_self");
}
    </script>





    <!-- Default form login -->
<form class="text-center border border-light p-5" action="" method="post" enctype="multipart/form-data">

    <p class="h4 mb-4">Dispositivos</p>

    <input type="text" class="form-control mb-4" placeholder="id" name="id" id="id">
    <!-- Nombre -->
    <input type="text" class="form-control mb-4" placeholder="Nombre" name="name" id="name">
    <!-- Marca -->
    <input type="text" class="form-control mb-4" placeholder="Marca" name="brand" id="brand">
    <!-- Modelo -->
    <input type="file" class="form-control mb-4" placeholder="Modelo" name="modelo" id="modelo">
    <!--Descripcion-->
    <input type="text" class="form-control mb-4" placeholder="Descripcion" name="desc" id="desc">

    <!-- Sign in button -->
    <input class="btn btn-info btn-block my-4" type="submit" value="Subir">





</form>
<p>Funciona? : <div id="txtHint"></div></p>
<td><button class="btn btn-info btn-block my-4" onclick="actualizar(1)">Actualizar</button></td>


<?php
  require '../Controlador/loadDispositivo.php';
  require '../Controlador/BusquedaData.php';
?>
<!-- Default form login -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
