<?php

require_once 'conexao.php';


class TecnicoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllTecnicos() {
        try {
            $sql = "SELECT t.idTecnico,t.Nome, t.CPF,t.Senha,t.Perfil,t.Stattus,e.Razao as Razao FROM tecnico as t, empresa as e WHERE t.empresa_idempresa=e.idempresa";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $tecnico = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $tecnico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvarTecnico(TecnicoDTO $tecnicoDTO) {
        try {
            $sql = "INSERT INTO tecnico (nome,cpf,senha,perfil,stattus,empresa_idempresa) 
                    VALUES (?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $tecnicoDTO->getNome());
            $stmt->bindValue(2, $tecnicoDTO->getCpf());
            $stmt->bindValue(3, $tecnicoDTO->getSenha());
            $stmt->bindValue(4, $tecnicoDTO->getPerfil());
            $stmt->bindValue(5, $tecnicoDTO->getStattus());
            $stmt->bindValue(6, $tecnicoDTO->getEmpresa_idempresa());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirTecnico($idtecnico) {
        try {
            $sql = "DELETE FROM tecnico 
                   WHERE idtecnico = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idtecnico);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getTecnicoById($idtecnico) {
        try {
            $sql = "SELECT t.idTecnico,t.Nome, t.CPF,t.Senha,t.Perfil,t.Stattus,e.Razao as Razao FROM tecnico as t, empresa as e  WHERE idtecnico = ? AND t.empresa_idempresa=e.idempresa ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idtecnico);
            $stmt->execute();
            $tecnico = $stmt->fetch(PDO::FETCH_ASSOC);
            return $tecnico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getTecnicoByCpf($cpf) {
        try {
            $sql = "SELECT t.idTecnico as tecnico,t.Nome, t.CPF,t.Senha,t.Perfil,t.Stattus,e.IdEmpresa as empresa,e.Cnpj as cnpj,e.Razao as razao FROM tecnico as t, empresa as e  WHERE cpf = ? AND t.empresa_idempresa=e.idempresa ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cpf);
            $stmt->execute();
            $tecnico = $stmt->fetch(PDO::FETCH_ASSOC);
            return $tecnico;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateTecnicoById(TecnicoDTO $tecnicoDTO) {
        try {
            $sql = "UPDATE tecnico SET nome=?,
                                       Cpf=?,
                                       Perfil=?,
                                       Stattus=?,
                                       Empresa_idempresa=? 
                    WHERE idtecnico= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $tecnicoDTO->getNome());
            $stmt->bindValue(2, $tecnicoDTO->getCpf());
            $stmt->bindValue(3, $tecnicoDTO->getPerfil());
            $stmt->bindValue(4, $tecnicoDTO->getStattus());
            $stmt->bindValue(5, $tecnicoDTO->getEmpresa_idempresa());
            $stmt->bindValue(6, $tecnicoDTO->getIdTecnico());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
