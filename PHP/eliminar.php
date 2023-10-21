<?php
$id = $_GET['id'];
include "conexion.php";
$conectar->query("DELETE FROM usuarios WHERE id='$id'");
header("Location: ../index.php");
//echo "<center><h1>'$id'</h1></center>";

?>