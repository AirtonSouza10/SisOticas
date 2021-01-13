<?php 

require_once '../dao/tecnicoDAO.php';

$idtecnico = $_GET["id"];
//echo $idfuncionario;

$tecnicoDAO = new TecnicoDAO();
$tecnicoDAO->excluirTecnico($idtecnico);
echo "</script>";
echo "<script>";
echo "alert('Excluido com sucesso');";
echo "window.location.href = '../view/listTecnicos.php';";
echo "</script> ";

?>

