<?php
class clienteDTO{
	private $idcliente;
	private $nome;
	private $cpf;
	private $rg;
	private $datanascimento;
	private $logradouro;
	private $bairro;
	private $cidade;
	private $uf;
	private $telefone;
	private $celular;
	private $email;
	private $stattus;

	//gets
	public function getIdcliente(){
		return $this->idcliente;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function getRg(){
		return $this->rg;
	}
	public function getDatanascimento(){
		return $this->datanascimento;
	}
	public function getLogradouro(){
		return $this->logradouro;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getUf(){
		return $this->uf;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getCelular(){
		return $this->celular;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getStattus(){
		return $this->stattus;
	}

	//sets
	public function setIdcliente($idcliente){
		$this->idcliente = $idcliente;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function setRg($rg){
		$this->rg = $rg;
	}
	public function setDatanascimento($datanascimento){
		$this->datanascimento = $datanascimento;
	}
	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;
	}
	public function setUf($uf){
		$this->uf = $uf;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setCelular($celular){
		$this->celular = $celular;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setStattus($stattus){
		$this->stattus = $stattus;
	}

}

?>