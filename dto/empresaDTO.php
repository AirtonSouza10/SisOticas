<?php 
class EmpresaDTO{
	private $idempresa;
	private $razao;
	private $cnpj;
	private $inscricao;

	//gets
	public function getIdempresa(){
		return $this->idempresa;
	}

	public function getRazao(){
		return $this->razao;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function getInscricao(){
		return $this->inscricao;
	}


	//sets

	public function setIdempresa($idempresa){
		$this->idempresa = $idempresa;
	}

	public function setRazao($razao){
		$this->razao = $razao;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	public function setInscricao($inscricao){
		$this->inscricao = $inscricao;
	}
}

?>