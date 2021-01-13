<?php 

require_once '../dao/clienteDAO.php';

$idcliente = $_GET["id"];
//echo $idfuncionario;

$clienteDAO = new ClienteDAO();
$clienteDAO->excluirCliente($idcliente);
echo "</script>";
echo "<script>";
echo "alert('Excluido com sucesso');";
echo "window.location.href = '../view/listClientes.php';";
echo "</script> ";

?>

