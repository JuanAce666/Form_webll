<?php
    include "PHP/conexion.php";
    
    $datos = $conectar->query("SELECT * FROM usuarios");
    /*
    while($dato = $sql->fetch()){
        echo $dato['correo']. " ".$dato
        ['password']."<br>";
    }*/

    /*foreach($datos as $i)
    echo $i['correo']. "" .$i['password']."<br>";*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="row vh-100 justify-content-center " >
    <div class="container p-5">
        <h1 class="text-white text-center">Datos</h1>
        <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Correo</th>
      <th scope="col">Password</th>
      <th scope="col">Acciones</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $i){ ?>
    <tr>
      <th scope="row"><?php echo $i['id'];?> </th>
      <td><?php echo $i['correo'];?></td>
      <td><?php echo $i['password'];?></td>
      <td><a class="btn btn-primary" href="PHP/editar.php?id=<?php echo $i['id'];?>" class="btn btn-primary">Editar</a></td>
      <td><a class="btn btn-danger" href="PHP/eliminar.php?id=<?php echo $i['id'];?>" class="btn btn-danger">Eliminar</a></td>
    <?php } ?> 
    </tr>
  </tbody>
</table>
    </div>
   <script src="js/bootstrap.js"></script>
</body>
</html>