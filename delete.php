<?php 
include 'connection.php';
$id = $_GET["idusuario"];

if(isset($_GET['idusuario'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM usuario WHERE idusuario = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: index.php');
}
?>