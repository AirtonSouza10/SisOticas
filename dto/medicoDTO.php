<?php
class MedicoDTO{
	private $idmedico;
	private $nome;
	private $crm;
	private $clinica;
	private $obs;
	private $stattus;

	//gets
	public function getIdmedico(){
		return $this->idmedico;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getCrm(){
		return $this->crm;
	}
	public function getClinica(){
		return $this->clinica;
	}
	public function getObs(){
		return $this->obs;
	}
	public function getStattus(){
		return $this->stattus;
	}

	//sets
	public function setIdmedico($idmedico){
		$this->idmedico = $idmedico;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setCrm($crm){
		$this->crm = $crm;
	}
	public function setClinica($clinica){
		$this->clinica = $clinica;
	}
	public function setObs($obs){
		$this->obs = $obs;
	}
	public function setStattus($stattus){
		$this->stattus = $stattus;
	}

}
?>