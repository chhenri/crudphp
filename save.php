<?php
//Adicionar a conexão com o banco 
include 'connection.php';
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nascimento = $_POST['data_nascimento'];
$sql = mysqli_query($connectionBD, "INSERT INTO usuario(nome_usuario, sobrenome_usuario, data_nascimento) VALUES ('$nome', '$sobrenome','$data_nascimento')");

if ($sql){
    header('Location: index.php');

}


?>