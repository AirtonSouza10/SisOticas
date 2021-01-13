<?php
class ProdutoAtendimentoDTO{
	private $produto_idproduto;
	private $atendimento_medico_idmedico;
	private $atendimento_tecnico_idtecnico;
	private $atendimento_cliente_idcliente;
	private $atendimento_idatendimento;
	private $atendimento_cliente_empresa_idempresa;

	//gets
	public function getProduto_idproduto(){
		return $this->produto_idproduto;
	}
	public function getAtendimento_medico_idmedico(){
		return $this->atendimento_medico_idmedico;
	}
	public function getAtendimento_tecnico_idtecnico(){
		^return $this->atendimento_tecnico_idtecnico;
	}
	public function getAtendimento_cliente_idcliente(){
		return $this->atendimento_cliente_idcliente;
	}
	public function getAtendimento_idatendimento(){
		return $this->atendimento_idatendimento;
	}
	public function getAtendimento_cliente_empresa_idempresa(){
		return $this->atendimento_cliente_empresa_idempresa;
	}

	//sets
	public function setProduto_idproduto($produto_idproduto){
		$this->produto_idproduto = $produto_idproduto;
	}
	public function setAtendimento_medico_idmedico($atendimento_medico_idmedico){
		$this->atendimento_medico_idmedico = $atendimento_medico_idmedico;
	}
	public function setAtendimento_tecnico_idtecnico($atendimento_tecnico_idtecnico){
		$this->atendimento_tecnico_idtecnico = $atendimento_tecnico_idtecnico;
	}
	public function setAtendimento_cliente_idcliente($atendimento_cliente_idcliente){
		$this->atendimento_cliente_idcliente = $atendimento_cliente_idcliente;
	}
	public function setAtendimento_idatendimento($atendimento_idatendimento){
		$this->atendimento_idatendimento = $atendimento_idatendimento;
	}
	public function setAtendimento_cliente_empresa_idempresa($atendimento_cliente_empresa_idempresa){
		$this->atendimento_cliente_empresa_idempresa = $atendimento_cliente_empresa_idempresa;
	}
}
?>