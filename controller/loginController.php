<?php
session_start();
require_once '../dao/loginDAO.php';

$cpf = $_POST["cpf"];
$senha = md5($_POST["senha"]);

$loginDAO = new LoginDAO();
$cpf = $loginDAO->login($cpf,$senha);

if (!empty($cpf)) {
    $_SESSION["cpf"] = $_POST["cpf"];

    echo "<script>";
    echo "window.location.href = '../view/index2.php';";
    echo "</script> ";
} else {
    $msg = "Usuário e/ou senha invalido";
    echo "<script>";
    echo "window.location.href = '../index.php?msg={$msg}';";
    echo "</script> ";
    
}
?>