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


    $tabela[] = $array1;
    $tabela[] = $array2;
    $tabela[] = $newArray ;

    $tabela1 = json_encode($tabela); 
    
    setcookie("listaTabela", $tabela1);
    header("Location: parte2.php");
}
