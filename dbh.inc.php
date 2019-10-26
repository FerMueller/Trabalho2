<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "trabalho2";

$con = mysql_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$con) {
    die("Conexão falhou ".mysql_connect_error());
}