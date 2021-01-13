<?php
class atendimentoDTO{

	private $idatendimento;
	private $cliente_idcliente;
	private $tecnico_idtecnico;
	private $medico_idmedico;
	private $empresa_idempresa;
	private $dataatendimento;
	//variaveis refracao
	private $resfericood;
	private $resfericooe;
	private $rcilindricood;
	private $rcilindricooe;
	private $reixood;
	private $reixooe;
	private $ravod;
	private $ravoe;
	private $rambosolhos;
	private $radicao;
	//variaveis ceratometria
	private $chorizontalod;
	private $chorizontaloe;
	private $cverticalod;
	private $cverticaloe;
	private $ceixood;
	private $ceixooe;
	//variaveis lentes de contato
	private $lcesfericood;
	private $lcesfericooe;
	private $lccilindricood;
	private $lccilindricooe;
	private $lceixood;
	private $lceixooe;
	private $lcavod;
	private $lcavoe;
	private $lccbod;
	private $lccboe;
	private $lcambosolhos;
	//variaveis gerais
	private $dataentrega;
	private $usuariodelentes;
	private $observacoes;
	private $status_2;
	//variaveis acrescentadas
	private $produto_idproduto;
	private $produto2;
	//gets
	public function getIdatendimento(){
		return $this->idatendimento;
	}
	public function getCliente_idcliente(){
		return $this->cliente_idcliente;
	}
	public function getTecnico_idtecnico(){
		return $this->tecnico_idtecnico;
	}
	public function getMedico_idmedico(){
		return $this->medico_idmedico;
	}
	public function getEmpresa_idempresa(){
		return $this->empresa_idempresa;
	}
	public function getDataatendimento(){
		return $this->dataatendimento;
	}
	public function getResfericood(){
		return $this->resfericood;
	}
	public function getResfericooe(){
		return $this->resfericooe;
	}
	public function getRcilindricood(){
		return $this->rcilindricood;
	}
	public function getRcilindricooe(){
		return $this->rcilindricooe;
	}
	public function getReixood(){
		return $this->reixood;
	}
	public function getReixooe(){
		return $this->reixooe;
	}
	public function getRavod(){
		return $this->ravod;
	}
	public function getRavoe(){
		return $this->ravoe;
	}
	public function getRambosolhos(){
		return $this->rambosolhos;
	}
	public function getRadicao(){
		return $this->radicao;
	}
	public function getChorizontalod(){
		return $this->chorizontalod;
	}
	public function getChorizontaloe(){
		return $this->chorizontaloe;
	}
	public function getCverticalod(){
		return $this->cverticalod;
	}
	public function getCverticaloe(){
		return $this->cverticaloe;
	}
	public function getCeixood(){
		return $this->ceixood;
	}
	public function getCeixooe(){
		return $this->ceixooe;
	}
	public function getLcesfericood(){
		return $this->lcesfericood;
	}
	public function getLcesfericooe(){
		return $this->lcesfericooe;
	}
	public function getLccilindricood(){
		return $this->lcesfericood;
	}
	public function getLccilindricooe(){
		return $this->lccilindricooe;
	}
	public function getLceixood(){
		return $this->lceixood;
	}
	public function getLceixooe(){
		return $this->lceixooe;
	}
	public function getLcavod(){
		return $this->lcavod;
	}
	public function getLcavoe(){
		return $this->lcavoe;
	}
	public function getLccbod(){
		return $this->lccbod;
	}
	public function getLccboe(){
		return $this->lccboe;
	}
	public function getLcambosolhos(){
		return $this->lcambosolhos;
	}
	public function getDataentrega(){
		return $this->dataentrega;
	}
	public function getUsuariodelentes(){
		return $this->usuariodelentes;
	}
	public function getObservacoes(){
		return $this->observacoes;
	}
	public function getStatus_2(){
		return $this->status_2;
	}
	public function getProduto_idproduto(){
		return $this->produto_idproduto;
	}
	public function getProduto2(){
		return $this->produto2;
	}


	//sets
	public function setIdatendimento($idatendimento){
		$this->idatendimento = $idatendimento;
	}
	public function setCliente_idcliente($cliente_idcliente){
		$this->cliente_idcliente = $cliente_idcliente;
	}
	public function setTecnico_idtecnico($tecnico_idtecnico){
		$this->tecnico_idtecnico = $tecnico_idtecnico;
	}
	public function setMedico_idmedico($medico_idmedico){
		$this->medico_idmedico = $medico_idmedico;
	}
	public function setEmpresa_idempresa($empresa_idempresa){
		$this->empresa_idempresa = $empresa_idempresa;
	}
	public function setDataatendimento($dataatendimento){
		$this->dataatendimento = $dataatendimento;
	}
	public function setResfericood($resfericood){
		$this->resfericood = $resfericood;
	}
	public function setResfericooe($resfericooe){
		$this->resfericooe = $resfericooe;
	}
	public function setRcilindricood($rcilindricood){
		$this->rcilindricood = $rcilindricood;
	}
	public function setRcilindricooe($rcilindricooe){
		$this->rcilindricooe = $rcilindricooe;
	}
	public function setReixood($reixood){
		$this->reixood = $reixood;
	}
	public function setReixooe($reixooe){
		$this->reixooe = $reixooe;
	}
	public function setRavod($ravod){
		$this->ravod = $ravod;
	}
	public function setRavoe($ravoe){
		$this->ravoe = $ravoe;
	}
	public function setRambosolhos($rambosolhos){
		$this->rambosolhos = $rambosolhos;
	}
	public function setRadicao($radicao){
		$this->radicao = $radicao;
	}
	public function setChorizontalod($chorizontalod){
		$this->chorizontalod = $chorizontalod;
	}
	public function setChorizontaloe($chorizontaloe){
		$this->chorizontaloe = $chorizontaloe;
	}
	public function setCverticalod($cverticalod){
		$this->cverticalod = $cverticalod;
	}
	public function setCverticaloe($cverticaloe){
		$this->cverticaloe = $cverticaloe;
	}
	public function setCeixood($ceixood){
		$this->ceixood = $ceixood;
	}
	public function setCeixooe($ceixooe){
		$this->ceixooe = $ceixooe;
	}
	public function setLcesfericood($lcesfericood){
		$this->lcesfericood = $lcesfericood;
	}
	public function setLcesfericooe($lcesfericooe){
		$this->lcesfericooe = $lcesfericooe;
	}
	public function setLccilindricood($lccilindricood){
		$this->lccilindricood = $lccilindricood;
	}
	public function setLccilindricooe($lccilindricooe){
		$this->lccilindricooe = $lccilindricooe;
	}
	public function setLceixood($lceixood){
		$this->lceixood = $lceixood;
	}
	public function setLceixooe($lceixooe){
		$this->lceixooe = $lceixooe;
	}
	public function setLcavod($lcavod){
		$this->lcavod = $lcavod;
	}
	public function setLcavoe($lcavoe){
		$this->lcavoe = $lcavoe;
	}
	public function setLccbod($lccbod){
		$this->lccbod = $lccbod;
	}
	public function setLccboe($lccboe){
		$this->lccboe = $lccboe;
	}
	public function setLcambosolhos($lcambosolhos){
		$this->lcambosolhos = $lcambosolhos;
	}
	public function setDataentrega($dataentrega){
		$this->dataentrega = $dataentrega;
	}
	public function setUsuariodelentes($usuariodelentes){
		$this->usuariodelentes = $usuariodelentes;
	}
	public function setObservacoes($observacoes){
		$this->observacoes = $observacoes;
	}
	public function setStatus_2($status_2){
		$this->status_2 = $status_2;
	}
	public function setProduto_idproduto($produto_idproduto){
		$this->produto_idproduto = $produto_idproduto;
	} 
	public function setProduto2($produto2){
		$this->produto2 = $produto2;
	}

}
?>