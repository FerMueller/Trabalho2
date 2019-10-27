<?php

session_start();

$bebida   = $_POST["sl-1"];
$ano  = $_POST["sl-2"];
$valor = $_POST["sl-3"];
$interesse = $_POST["choice"];
$cadastrar = $_POST["cadastrar"];

if (isset($cadastrar) && isset($_SESSION["login"]) || isset($bebida) || isset($ano) || isset($valor) || isset($interesse)) {
    $newArray = array("tipo" => $bebida, "Interrese" => $interesse, "Ano" => $ano, "Valor" => $valor);
    $array1 = array("tipo" => "Espumante", "Interrese" => "Sim", "Ano" => "2018 - 2017", "Valor" => "R$170 - R$220");
    $array2 = array("tipo" => "Vinho", "Interrese" => "Sim", "Ano" => "2018 - 2017", "Valor" => "R$170 - R$220");


    $tabela = array_push($array1);
    $tabela = array_push($array2);
    $tabela = array_push($newArray);

    setcookie("listaTabela", $newArray);
    var_dump($_COOKIE["listaTabela"]);
}
