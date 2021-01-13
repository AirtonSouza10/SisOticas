<?php

require_once 'conexao.php';


class AtendimentoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllAtendimentos() {
        try {
            $sql = "SELECT a.idatendimento,c.nome as cliente, m.nome as medico,DATE_FORMAT(a.dataatendimento,'%d/%m/%Y') AS dataatendimento, DATE_FORMAT(a.dataentrega,'%d/%m/%Y') AS dataentrega, p.descricao,p.cor,a.status_2  FROM atendimento as a, cliente as c, tecnico as t, medico as m, empresa as e, produto as p WHERE a.cliente_idcliente = c.idcliente AND a.tecnico_idtecnico = t.idtecnico AND a.medico_idmedico = m.idmedico AND a.empresa_idempresa = e.idempresa AND a.produto_idproduto = p.idproduto AND a.Status_2= 'A' ORDER BY a.idatendimento  DESC LIMIT 500 ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $atendimento = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $atendimento;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarAtendimento(AtendimentoDTO $atendimentoDTO) {
        try {
            $sql = "INSERT INTO atendimento (cliente_idcliente,tecnico_idtecnico,medico_idmedico,empresa_idempresa,dataatendimento,REsfericoOD,REsfericoOE,RCilindricoOD,RCilindricoOE,REixoOD, REixoOE,RAvOD,RAvOE,RAmbosOlhos,RAdicao,CHorizontalOD,CHorizontalOE,CVerticalOD,CVerticalOE,CEixoOD,CEixoOE,LCEsfericoOD,LCEsfericoOE,LCCilindricoOD,LCCilindricoOE,LCEixoOD,LCEixoOE,LCAvOD,LCAvOE,LCCBOD,LCCBOE,LCAmbosOlhos,DataEntrega,UsuarioDeLentes,Observacoes,Status_2,produto_idproduto,Produto2) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $atendimentoDTO->getCliente_idcliente());
            $stmt->bindValue(2, $atendimentoDTO->getTecnico_idtecnico());
            $stmt->bindValue(3, $atendimentoDTO->getMedico_idmedico());
            $stmt->bindValue(4, $atendimentoDTO->getEmpresa_idempresa());
            $stmt->bindValue(5, $atendimentoDTO->getDataatendimento());
            $stmt->bindValue(6, $atendimentoDTO->getResfericood());
            $stmt->bindValue(7, $atendimentoDTO->getResfericooe());
            $stmt->bindValue(8, $atendimentoDTO->getRcilindricood());
            $stmt->bindValue(9, $atendimentoDTO->getRcilindricooe());
            $stmt->bindValue(10, $atendimentoDTO->getReixood());
            $stmt->bindValue(11, $atendimentoDTO->getReixooe());
            $stmt->bindValue(12, $atendimentoDTO->getRavod());
            $stmt->bindValue(13, $atendimentoDTO->getRavoe());
            $stmt->bindValue(14, $atendimentoDTO->getRambosolhos());
            $stmt->bindValue(15, $atendimentoDTO->getRadicao());
            $stmt->bindValue(16, $atendimentoDTO->getChorizontalod());
            $stmt->bindValue(17, $atendimentoDTO->getChorizontaloe());
            $stmt->bindValue(18, $atendimentoDTO->getCverticalod());
            $stmt->bindValue(19, $atendimentoDTO->getCverticaloe());
            $stmt->bindValue(20, $atendimentoDTO->getCeixood());
            $stmt->bindValue(21, $atendimentoDTO->getCeixooe());
            $stmt->bindValue(22, $atendimentoDTO->getLcesfericood());
            $stmt->bindValue(23, $atendimentoDTO->getLcesfericooe());
            $stmt->bindValue(24, $atendimentoDTO->getLccilindricood());
            $stmt->bindValue(25, $atendimentoDTO->getLccilindricooe());
            $stmt->bindValue(26, $atendimentoDTO->getLceixood());
            $stmt->bindValue(27, $atendimentoDTO->getLceixooe());
            $stmt->bindValue(28, $atendimentoDTO->getLcavod());
            $stmt->bindValue(29, $atendimentoDTO->getLcavoe());
            $stmt->bindValue(30, $atendimentoDTO->getLccbod());
            $stmt->bindValue(31, $atendimentoDTO->getLccboe());                        
            $stmt->bindValue(32, $atendimentoDTO->getLcambosolhos());
            $stmt->bindValue(33, $atendimentoDTO->getDataentrega());
            $stmt->bindValue(34, $atendimentoDTO->getUsuariodelentes());
            $stmt->bindValue(35, $atendimentoDTO->getObservacoes());
            $stmt->bindValue(36, $atendimentoDTO->getStatus_2());
            $stmt->bindValue(37, $atendimentoDTO->getProduto_idproduto());
            $stmt->bindValue(38, $atendimentoDTO->getProduto2());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getAtendimentoById($idatendimento) {
        try {
            $sql = "SELECT a.idatendimento,c.nome as cliente,c.cpf as cpf, m.nome as medico,m.crm as crm,t.nome as tecnico, e.razao,e.cnpj,DATE_FORMAT(a.dataatendimento,'%d/%m/%Y') AS dataatendimento, DATE_FORMAT(a.dataentrega,'%d/%m/%Y') AS dataentrega,a.REsfericoOD,a.REsfericoOE,a.RCilindricoOD,a.RCilindricoOE,a.REixoOD,a.REixoOE,a.RAvOD,a.RAvOE,a.RAmbosOlhos,a.RAdicao,a.CHorizontalOD,a.CHorizontalOE,a.CVerticalOD,a.CVerticalOE,a.CEixoOD,a.CEixoOE,a.LCEsfericoOD,a.LCEsfericoOE,a.LCCilindricoOD,a.LCCilindricoOE,a.LCEixoOD, a.LCEixoOE,a.LCAvOD,a.LCAvOE,a.LCCBOD,a.LCCBOE,a.LCAmbosOlhos,a.UsuarioDeLentes,a.Observacoes,a.Status_2,a.Produto2,p.descricao,p.marca,p.tipo,p.cor,a.DataEntrega,a.observacoes,a.produto2, a.produto_idproduto  FROM atendimento as a, cliente as c, tecnico as t, medico as m, empresa as e, produto as p WHERE a.cliente_idcliente = c.idcliente AND a.tecnico_idtecnico = t.idtecnico AND a.medico_idmedico = m.idmedico AND a.empresa_idempresa = e.idempresa AND a.produto_idproduto = p.idproduto AND idatendimento = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idatendimento);
            $stmt->execute();
            $atendimento = $stmt->fetch(PDO::FETCH_ASSOC);

            return $atendimento;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function updateCancelaById(AtendimentoDTO $atendimentoDTO) {
        try {
            $sql = "UPDATE atendimento SET status_2='C' 
                    WHERE idatendimento= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $atendimentoDTO->getIdAtendimento());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }    

    public function updateAtendimentoById(AtendimentoDTO $atendimentoDTO) {
        try {
            $sql = "UPDATE atendimento SET Resfericood=?,
                                       Resfericood=?,
                                       Rcilindricood=?,
                                       Rcilindricooe=?,
                                       Reixood=?, 
                                       Reixooe=?,
                                       Ravod=?,
                                       Ravoe=?,
                                       Rambosolhos=?,
                                       Radicao=?,
                                       Chorizontalod=?,
                                       Chorizontaloe=?,                                       
                                       Cverticalod=?,
                                       Cverticaloe=?, 
                                       Ceixood=?,
                                       Ceixooe=?,
                                       Lcesfericood=?,
                                       Lcesfericooe=?,                                      
                                       Lccilindricood=?,
                                       Lccilindricooe=?,
                                       Lceixood=?, 
                                       Lceixooe=?,
                                       Lcavod=?,                                       
                                       Lcavoe=?,
                                       Lccbod=?,
                                       Lccboe=?,
                                       Lcambosolhos=?,
                                       DataEntrega=?,
                                       produto_idproduto=?,
                                       Produto2=?,
                                       Observacoes=?

                    WHERE idatendimento= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $atendimentoDTO->getResfericood());
            $stmt->bindValue(2, $atendimentoDTO->getResfericooe());
            $stmt->bindValue(3, $atendimentoDTO->getRcilindricood());
            $stmt->bindValue(4, $atendimentoDTO->getRcilindricooe());
            $stmt->bindValue(5, $atendimentoDTO->getReixood());
            $stmt->bindValue(6, $atendimentoDTO->getReixooe());
            $stmt->bindValue(7, $atendimentoDTO->getRavod());
            $stmt->bindValue(8, $atendimentoDTO->getRavoe());
            $stmt->bindValue(9, $atendimentoDTO->getRambosolhos());
            $stmt->bindValue(10, $atendimentoDTO->getRadicao());
            $stmt->bindValue(11, $atendimentoDTO->getChorizontalod());
            $stmt->bindValue(12, $atendimentoDTO->getChorizontaloe());
            $stmt->bindValue(13, $atendimentoDTO->getCverticalod());
            $stmt->bindValue(14, $atendimentoDTO->getCverticaloe());
            $stmt->bindValue(15, $atendimentoDTO->getCeixood());
            $stmt->bindValue(16, $atendimentoDTO->getCeixooe());
            $stmt->bindValue(17, $atendimentoDTO->getLcesfericood());
            $stmt->bindValue(18, $atendimentoDTO->getLcesfericooe());
            $stmt->bindValue(19, $atendimentoDTO->getLccilindricood());
            $stmt->bindValue(20, $atendimentoDTO->getLccilindricooe());
            $stmt->bindValue(21, $atendimentoDTO->getLceixood());
            $stmt->bindValue(22, $atendimentoDTO->getLceixooe());
            $stmt->bindValue(23, $atendimentoDTO->getLcavod());
            $stmt->bindValue(24, $atendimentoDTO->getLcavoe());
            $stmt->bindValue(25, $atendimentoDTO->getLccbod());
            $stmt->bindValue(26, $atendimentoDTO->getLccboe());                     
            $stmt->bindValue(27, $atendimentoDTO->getLcambosolhos()); 
            $stmt->bindValue(28, $atendimentoDTO->getDataentrega());  
            $stmt->bindValue(29, $atendimentoDTO->getProduto_idproduto());  
            $stmt->bindValue(30, $atendimentoDTO->getProduto2());  
            $stmt->bindValue(31, $atendimentoDTO->getObservacoes());  

            $stmt->bindValue(32, $atendimentoDTO->getIdatendimento());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
