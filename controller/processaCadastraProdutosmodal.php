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

$produtoDTO = new ProdutoDTO();
$produtoDTO->setDescricao($descricao);
$produtoDTO->setMarca($marca);
$produtoDTO->setTipo($tipo);
$produtoDTO->setCor($cor);
$produtoDTO->setObs($obs);
$produtoDTO->setStattus($stattus);

$conn = mysqli_connect("localhost","root","","sisotica");
$search = "SELECT * FROM produto WHERE descricao = '$descricao' AND cor = '$cor'";
$retorno = mysqli_query($conn, $search);

if(mysqli_num_rows($retorno) == 0){ 
$produtoDAO = new produtoDAO();
$sucesso = $produtoDAO->salvarProduto($produtoDTO);

if ($sucesso){

   echo	"<script>alert('Cadastro realizado com sucesso');</script>";
   echo	"<script>window.location.href = '../view/cadastraAtendimentos.php';</script>";	
}
	}else{
	echo	"<script>alert('Item já cadastrado');</script>";
	echo	"<script>window.location.href = '../view/cadastraAtendimentos.php';</script>";	
}
?>

