<?php
require_once '../dto/produtoDTO.php';
require_once '../dao/produtoDAO.php'; 

// recuperei os dados do formulario
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];
$tipo = $_POST["tipo"];
$cor = $_POST["cor"];
$obs = $_POST["obs"];
$stattus = $_POST["stattus"];
$idproduto = $_POST["idproduto"];

$produtoDTO = new ProdutoDTO();
$produtoDTO->setDescricao($descricao);
$produtoDTO->setMarca($marca);
$produtoDTO->setTipo($tipo);
$produtoDTO->setCor($cor);
$produtoDTO->setObs($obs);
$produtoDTO->setStattus($stattus);
$produtoDTO->setIdproduto($idproduto);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM produto WHERE descricao = '$descricao' AND cor = '$cor' ";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0 or mysqli_num_rows($retorno) == 1){ 
$produtoDAO = new ProdutoDAO();
$produtoDAO->updateProdutoById($produtoDTO);

   echo	"<script>alert('Cadastro alterado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/listProdutos.php';</script>";

}else{
	echo	"<script>alert('Medico ja cadastrado');</script>";
	echo	"<script>window.location.href = '../view/listProdutos.php';</script>";	
}

?>
