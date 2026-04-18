<?php

session_start();
session_regenerate_id();
$usuario = "admin";
$senha = '$argon2id$v=19$m=65536,t=4,p=1$SkJoNmt2dXJnM0hoVXFyZw$gvjNidKVlCfmFMRPtzblPimbQ4nR99zGilutjX2n/4s';
//var_dump(password_hash("admin", PASSWORD_ARGON2ID));
//die("teste");
if($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION["user"]) ){
$token = $_POST["csrf"] ?? "";
if(!isset($_SESSION["csrf_token"])|| !hash_equals($_SESSION
["csrf_token"], $token)) {
    die("falha no login");
}

if ($_POST["login"] === $usuario && password_verify($_POST["senha"], $senha)) {  
    $_SESSION["user"] = $usuario;
}

}

if(!isset($_SESSION["user"])){   
    header("location: ../index.php"); 
}


$page = $_GET["p"] ?? "home";

$titulo = match ($page) {
    "home" => ": Home" ,
    "tab" => ": Tabela",
    "form"=> ": Formulario",
    default => ": Erro 404",
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Sessões em PHP <?= $titulo ?? "" ?></title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<header><h1>Sessões</h1></header>
<nav><ul>
    <a href="?p=home">Home</a>
    <a href="?p=tab">Tabela</a>
    <a href="?p=form">Formulário</a>
    <a href="?p=sair">sair</a>
</ul></nav>
<main>
    <section>
        <?php
        require_once match ($page) {
        "home" => "./page/home.php" ,
        "tab" => "./page/tabela.php",
        "form"=> "./page/formulario.php",
        "sair"=> "./page/logout.php",
        default => "./page/404.php",
        }
        ?>
    </section>
</main>
<footer>
    <h3> Rodapé </h3>
</footer>
    
</body>
</html>