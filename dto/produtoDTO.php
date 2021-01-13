<?php
class ProdutoDTO{
	private $idproduto;
	private $descricao;
	private $marca;
	private $tipo;
	private $cor;
	private $obs;
	private $stattus;

	//gets
	public function getIdproduto(){
		return $this->idproduto;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getMarca(){
		return $this->marca;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getCor(){
		return $this->cor;
	}
	public function  getObs(){
		return $this->obs;
	}
	public function getStattus(){
		return $this->stattus;
	}
	//sets
	public function setIdproduto($idproduto){
		$this->idproduto = $idproduto;
	}
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function setMarca($marca){
		$this->marca = $marca;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function setCor($cor){
		$this->cor = $cor;
	}
	public function setObs($obs){
		$this->obs = $obs;
	}
	public function setStattus($stattus){
		$this->stattus = $stattus;
	}


}
?>