<?php
//Declaracao de variavel
$variavel_em_php = "Não tem tipo";
$outra_variavel =   123;


//Saída de Texto
echo "Olá, mundo! \n" . PHP_EOL;
print("<br>Olá, mundo!");
$var= print "Olá";

echo "<br> $var";

//typecast
$inteiro = (int) 10;
$float = (float) 10;
$texto = (float) "10" + 10;
$bool = (bool)0;

echo "<pre>";
    var_dump($inteiro);
    var_dump($float);
    var_dump($texto);
    var_dump($bool);


echo "</pre>";


$vetor = [1,2,3,4,5,6,9];


echo "<hr>";
var_dump($vetor);
foreach ($vetor as $key => &$valor) {
    if($valor == 6) $valor++;
}
echo "<br>";
var_dump($vetor);
$array_associativo = [
    1 => "Primeiro Valor",
    2.6 => "Segundo Valor",
    "3" => "Terceiro Valor"
];
echo "<pre>";
var_dump($array_associativo);
echo "</pre>";


foreach($array_associativo as $valor){
    echo "<br> $valor";
}

$page;
if(!isset($page)){
    $page = "value";
}
switch ($page) {    
    case "value":
            echo "<hr> $page <hr>";
    break;
    case "Teste":
        echo "<hr> $page <hr>";
    break;
    case "Outro":
        echo "<hr> $page <hr>";
    break;
        default:
            echo "<hr> Nenhuma Pagina <hr>";
        break;
}
echo "<hr> Match: <br>". match($page){
    'value' => $page,
    'Teste' => $page,
    'Outro' => $page,
    default => 'Nenhuma pagina'
} . "<hr>";

?>