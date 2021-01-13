<?php 
class TecnicoDTO{

    private $idtecnico;
    private $nome;
    private $cpf;
    private $senha;
    private $perfil;
    private $stattus;
    private $empresa_idempresa;

    //gets

    public function getIdtecnico() {
        return $this->idtecnico;
    }

    public function getNome(){
    	return $this->nome;
    }

    public function getCpf(){
    	return $this->cpf;
    }

    public function getSenha(){
    	return $this->senha;
    }
    public function getPerfil(){
        return $this->perfil;
    }

    public function getStattus(){
    	return $this->stattus;
    }

    public function getEmpresa_idempresa(){
        return $this->empresa_idempresa;
    }

    //sets

    public function setIdTecnico($idtecnico) {
        $this->idtecnico = $idtecnico;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    } 

    public function setPerfil($perfil){
        $this->perfil = $perfil;
    }

    public function setStattus($stattus) {
        $this->stattus = $stattus;
    } 

    public function setEmpresa_idempresa($empresa_idempresa){
        $this->empresa_idempresa = $empresa_idempresa;
    }

}

?>