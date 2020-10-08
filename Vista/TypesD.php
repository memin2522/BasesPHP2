<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styleDis.css"/>
    <title></title>
  </head>
  <body>
    <form action="" method="post" class="text-center border border-light p-5" >
    <?php
      require '../Controlador/loadDispositivo.php';
      if(isset($_GET['id']))
      {
        $query = "Select idDis, nombre from dispositivo Where idDis=".$_GET['id'];
        $result = mysqli_query($conn,$query);
        while($r = mysqli_fetch_assoc($result))
        {
          $d1=$r['idDis'];
          $d2=$r['nombre'];
          echo' Id:<br><input type="text" class="form-control mb-4" name="id" value="'.$d1.'" ><br>';
          echo' Nombre:<br><input type="text" class="form-control mb-4" name="nombre" value="'.$d2.'" ><br><br>';

        }
        echo 'Tipo de señal:<br><select name="se" id="senn"> ';
        $query = "Select * from tipo";
        $result = mysqli_query($conn,$query);

        while ($r = mysqli_fetch_assoc($result))
        {
          $d1=$r['idTipo'];
          $d2=$r['nombre'];

          echo'<option class="form-control" value="'.$d1.'">'.$d2.'</option>';
        }
        echo '</select> <br> <br>';
      }
    ?>
    <input type="submit" class="btn btn-info btn-block my-4" />
  </form>
  <?php
  require "../Controlador/CSennal.php"
   ?>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
