<?php

$nome = $_POST["nome"];
$data = $_POST["data_nascimento"];
$email = $_POST["email"];
$pais = $_POST["pais"];
$telefone = $_POST["telefone"];
$idade = $_POST["idade"];
$site = $_POST["site"];
$comentarios = $_POST["comentarios"];

$habilidades = "";

if(isset($_POST["habilidades"])) {

    $habilidades = implode(", ", $_POST["habilidades"]);
}

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Dados Recebidos</title>

</head>

<body>

    <h1>Dados do Formulário</h1>

    <p><b>Nome:</b> <?php echo $nome; ?></p>

    <p><b>Data de Nascimento:</b> <?php echo $data; ?></p>

    <p><b>Email:</b> <?php echo $email; ?></p>

    <p><b>País:</b> <?php echo $pais; ?></p>

    <p><b>Telefone:</b> <?php echo $telefone; ?></p>

    <p><b>Idade:</b> <?php echo $idade; ?></p>

    <p><b>Site:</b> <?php echo $site; ?></p>

    <p><b>Habilidades:</b> <?php echo $habilidades; ?></p>

    <p><b>Comentários:</b> <?php echo $comentarios; ?></p>

</body>

</html> 
