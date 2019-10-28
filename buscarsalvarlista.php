<?php

session_start();

$bebida   = $_POST["sl-1"];
$ano  = $_POST["sl-2"];
$valor = $_POST["sl-3"];
$interesse = $_POST["choice"];
$cadastrar = $_POST["cadastrar"];
$timeOut = 5;

if (isset($_SESSION['last_action'])) {
    $secondsInativo = time() - $_SESSION['last_action'];
    $timeOutSeconds = $timeOut * 60;
    if ($secondsInativo >= $timeOutSeconds) {
        session_unset();
        session_destroy();
        header("Location: parte1.php");
    }
}

if (isset($_SESSION["login"])) {
    if (isset($cadastrar) && (isset($bebida) || isset($ano) || isset($valor) || isset($interesse))) {

        if (isset($_COOKIE["listaTabela"])) {
            if (get_magic_quotes_gpc()) {
                $dadosTabela = stripslashes($_COOKIE["listaTabela"]);
            } else {
                $dadosTabela = $_COOKIE["listaTabela"];
            }
            $dadosTabela = json_decode($dadosTabela, true);
        }
        $dadosTabela[] = array("tipo" => $bebida, "Interrese" => $interesse, "Ano" => $ano, "Valor" => $valor);
        $tabela1 = json_encode($dadosTabela);

        setcookie("listaTabela", $tabela1);
        header("Location: parte2.php");
    }
} else {
    header("Location: parte1.php");
}
