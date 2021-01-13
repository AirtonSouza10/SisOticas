<?php 

require_once '../dao/medicoDAO.php';

$idmedico = $_GET["id"];
//echo $idfuncionario;

$medicoDAO = new MedicoDAO();
$medicoDAO->excluirMedico($idmedico);
echo "</script>";
echo "<script>";
echo "alert('Excluido com sucesso');";
echo "window.location.href = '../view/listMedicos.php';";
echo "</script> ";

?>

