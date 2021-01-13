<?php 

require_once '../dao/produtoDAO.php';

$idproduto = $_GET["id"];
//echo $idfuncionario;

$produtoDAO = new ProdutoDAO();
$produtoDAO->excluirProduto($idproduto);
echo "</script>";
echo "<script>";
echo "alert('Excluido com sucesso');";
echo "window.location.href = '../view/listProdutos.php';";
echo "</script> ";

?>

