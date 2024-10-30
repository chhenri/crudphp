<?php
    include 'connection.php';
    if(isset($_GET['idusuario'])){
        $id = $_GET['idusuario'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM usuario WHERE idusuario=$id");
        $count = (is_array($sql)) ? count($sql) :1;
        if($count){
            $n = mysqli_fetch_array($sql);
            $nome = $n['nome_usuario'];
            $sobrenome = $n['sobrenome_usuario'];
            $data_nascimento = $n['data_nascimento'];


        }
    }
    if(isset($_POST['editar'])){
        $id = $_GET["idusuario"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $data_nascimento = $_POST["data_nascimento"];
        $queryUpdate = "UPDATE usuario SET nome_usuario = '$nome', sobrenome_usuario = '$sobrenome', data_nascimento = '$data_nascimento' WHERE idusuario = $id";

        $consulta = mysqli_query($connectionBD, $queryUpdate);

        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crud PHP</title>
</head>
<body>
<div class="container col-md-6 offset-md-3">

<h1>Atualizar Informações - PHP com MySQL</h1>
<form action="save.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome" name="nome" id="">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" id="">
        </div>
        <div class="col">
            <input type="date" class="form-control" placeholder="Data de Nascimento" name="data_nascimento" id="">
        </div>
        
    </div> <br>
        <div> 
            <button type="submit" class="btn btn-outline-primary">Salvar</button>
        </div>
   
</form>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>