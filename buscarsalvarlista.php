<?php

session_start();

$login = $_POST['email'];
$entrar = $_POST['submit'];
$senha = md5($_POST['password']);
$senha1 = $_POST['password'];
$manterLogado = $_POST['check'];

$bebida   = $_POST["sl-1"];
$ano  = $_POST["sl-2"];
$valor = $_POST["sl-3"];
$interesse     = $_POST["choice"];

$array1 = array("tipo" => "Vinho", "Interrese" => "Sim", "Ano" => "2018 - 2017", "Valor" => "R$170 - R$220");
$array2 = array("tipo" => "Vinho", "Interrese" => "Sim", "Ano" => "2018 - 2017", "Valor" => "R$170 - R$220");

$tabela = array_push($$array1);
$tabela = array_push($$array2);

$newArray = ["tipo" => $bebida , "Interrese" => $interesse, "Ano" => $ano, "Valor" => $valor];
$tabela = array_push($newArray);

setcookie("listaTabela", $tabela);