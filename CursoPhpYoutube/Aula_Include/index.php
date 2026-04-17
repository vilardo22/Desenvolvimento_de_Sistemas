<?php
//Caso caminho estaja errado ele da o erro, mas continua reproduzindo outros conteudos
include './teste.php';
//Tem certeza que esta incluindo somente uma vez, mesmo que esteja repetido include com mesmo caminho
//include_once './teste.php';

// Caso de erro ele nao continua,
//require './teste.php';
//Quando tiver erro mostra somente 1 erro, e se funcionar mostra somente uma vez
//require_once './teste.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  echo $name;
  ?>  
</body>
</html>





