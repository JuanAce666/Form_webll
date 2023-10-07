<?php
    $servidor = 'localhost';
    $BD = 'test';
    $usuario = 'root';
    $password = '';
    $conectar =  new PDO("mysql: server=$servidor;
     dbname=$BD", $usuario, $password);

     //echo "conecta";
?>