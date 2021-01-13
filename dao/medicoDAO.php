<?php

require_once 'conexao.php';


class MedicoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllMedicos() {
        try {
            $sql = "SELECT idmedico, nome, crm, clinica, obs, Stattus 
            FROM medico LIMIT 50";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $medico = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $medico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getMedicosPesq($pesq) {
        try {
            $sql = "SELECT idmedico, nome, crm, clinica, obs, Stattus 
            FROM medico WHERE nome LIKE '%$pesq%' OR crm LIKE '%$pesq%' ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $medico = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $medico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function salvarMedico(MedicoDTO $medicoDTO) {
        try {
            $sql = "INSERT INTO medico (nome,crm,clinica,obs,stattus) 
                    VALUES (?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $medicoDTO->getNome());
            $stmt->bindValue(2, $medicoDTO->getCrm());
            $stmt->bindValue(3, $medicoDTO->getClinica());
            $stmt->bindValue(4, $medicoDTO->getObs());
            $stmt->bindValue(5, $medicoDTO->getStattus());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirMedico($idmedico) {
        try {
            $sql = "DELETE FROM medico 
                   WHERE idmedico = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedico);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getMedicoById($idmedico) {
        try {
            $sql = "SELECT IdMedico, Nome, Crm, Clinica, Obs, Stattus FROM medico WHERE idmedico = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idmedico);
            $stmt->execute();
            $medico = $stmt->fetch(PDO::FETCH_ASSOC);
            return $medico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateMedicoById(MedicoDTO $medicoDTO) {
        try {
            $sql = "UPDATE medico SET nome=?,
                                       crm=?,
                                       clinica=?,
                                       Obs=?,
                                       stattus=?
                    WHERE idmedico= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $medicoDTO->getNome());
            $stmt->bindValue(2, $medicoDTO->getCrm());
            $stmt->bindValue(3, $medicoDTO->getClinica());
            $stmt->bindValue(4, $medicoDTO->getObs());
            $stmt->bindValue(5, $medicoDTO->getStattus());
            $stmt->bindValue(6, $medicoDTO->getIdmedico());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
