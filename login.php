<?php

session_start();

$login = $_POST['email'];
$entrar = $_POST['submit'];
$senha = md5($_POST['password']);
$senha1 = $_POST['password'];
$manterLogado = $_POST['check'];


if (empty($login) || empty($senha)) {
    header("Location: parte1.php");
} else {
    if (isset($entrar)) {
        if ($login != "batata" || $senha1 != "batata") {
            die();
        } else {
            if (isset($manterLogado)) {
                setcookie("login", $login);
                setcookie("senha", $senha1);
                setcookie("manterLogado", "checked");
            }
            $_SESSION["login"] = $login;
            $_SESSION["senha"] = $senha1;
            header("Location: parte2.php");
            $_SESSION['last_action'] = time();
        }
    } else {
        http_response_code(404);
    }
}
