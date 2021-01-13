<?php 

require_once '../dao/empresaDAO.php';

$idempresa = $_GET["id"];
//echo $idfuncionario;

$empresaDAO = new EmpresaDAO();
$empresaDAO->excluirEmpresa($idempresa);
echo "</script>";
echo "<script>";
echo "alert('Excluido com sucesso');";
echo "window.location.href = '../view/listEmpresas.php';";
echo "</script> ";

?>

