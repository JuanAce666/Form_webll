<?php
    //comentarios 
    /* comentario de 
       varias lineas
    $edad = 22;
    print("Hola!");
    echo "<h1>Mundo </h1>".$edad;
    echo "Hola '$edad' <br>";
    echo 'tengo "$edad"';
    echo "tengo {$edad} años";*/

    //recibir los datos
    include 'conexion.php';
    $correo = $_POST['correo'];
    $password = $_REQUEST['password'];
    $claveHash = password_hash($password,PASSWORD_BCRYPT);
    
   /* $sql = "INSERT INTO usuarios VALUES (null,'$correo',
    '$claveHash')";*/

    $enviar = $conectar->prepare("INSERT INTO usuarios VALUES (null, ? , ? )");

    $enviar->bindParam(1,$correo);
    $enviar->bindParam(2,$claveHash);

    $enviar->execute();


    /*$conectar->query("INSERT INTO usuarios VALUES (null,
    '$correo','$claveHash')");*/

    //$conectar->query($sql);

    header('Location: ../index.php')//es para enrutar 

    //echo "Correo: {$correo} <br> Contra: {$password}";
    


?>