<?php

require_once 'conexao.php';


class EmpresaDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllEmpresas() {
        try {
            $sql = "SELECT idempresa, razao,cnpj,inscricao FROM empresa";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $empresa = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $empresa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarEmpresa(EmpresaDTO $empresaDTO) {
        try {
            $sql = "INSERT INTO empresa (razao,cnpj,inscricao) 
                    VALUES (?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $empresaDTO->getRazao());
            $stmt->bindValue(2, $empresaDTO->getCnpj());
            $stmt->bindValue(3, $empresaDTO->getInscricao());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirEmpresa($idempresa) {
        try {
            $sql = "DELETE FROM empresa 
                   WHERE idempresa = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idempresa);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getEmpresaById($idempresa) {
        try {
            $sql = "SELECT idempresa, razao,cnpj,inscricao FROM empresa WHERE idempresa = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idempresa);
            $stmt->execute();
            $empresa = $stmt->fetch(PDO::FETCH_ASSOC);
            return $empresa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateEmpresaById(EmpresaDTO $empresaDTO) {
        try {
            $sql = "UPDATE empresa SET razao=?,
                                       cnpj=?,
                                       Inscricao=?
                    WHERE idempresa= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $empresaDTO->getRazao());
            $stmt->bindValue(2, $empresaDTO->getCnpj());
            $stmt->bindValue(3, $empresaDTO->getInscricao());
            $stmt->bindValue(4, $empresaDTO->getIdempresa());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
