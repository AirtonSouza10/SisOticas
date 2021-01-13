<?php

require_once 'conexao.php';


class ClienteDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllClientes() {
        try {
            $sql = "SELECT idcliente, Nome, Cpf, RG, DataNascimento, Logradouro,Bairro, Cidade, UF, Telefone, Celular, email, stattus FROM cliente ORDER BY idcliente DESC LIMIT 20 ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getClientesPesq($pesq) {
        try {
            $sql = "SELECT idcliente, Nome, Cpf, RG, DataNascimento, Logradouro,Bairro, Cidade, UF, Telefone, Celular, email, stattus FROM cliente WHERE nome LIKE '%$pesq%' OR cpf LIKE '%$pesq%' ORDER BY idcliente DESC LIMIT 20 ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getClienteBusca($id) {
        try {
            $sql = "SELECT idcliente, Nome, Cpf, RG, DataNascimento, Logradouro,Bairro, Cidade, UF, Telefone, Celular, email, stattus FROM cliente WHERE idcliente = '$id' ORDER BY idcliente DESC LIMIT 20 ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
     public function getNivers() {
        try {
            $sql = "SELECT idcliente, Nome,DATE_FORMAT(DataNascimento,'%d/%m/%Y') AS datanascimento,Celular, email FROM cliente WHERE DAY(DataNascimento)=DAY(NOW()) and MONTH(DataNascimento)= MONTH(NOW()) ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }   

    public function salvarCliente(ClienteDTO $clienteDTO) {
        try {
            $sql = "INSERT INTO cliente (nome,cpf,rg,datanascimento,logradouro,bairro,cidade,uf,telefone,celular,email,stattus) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getCpf());
            $stmt->bindValue(3, $clienteDTO->getRg());
            $stmt->bindValue(4, $clienteDTO->getDataNascimento());
            $stmt->bindValue(5, $clienteDTO->getLogradouro());
            $stmt->bindValue(6, $clienteDTO->getBairro());
            $stmt->bindValue(7, $clienteDTO->getCidade());
            $stmt->bindValue(8, $clienteDTO->getUf());
            $stmt->bindValue(9, $clienteDTO->getTelefone());
            $stmt->bindValue(10, $clienteDTO->getCelular());
            $stmt->bindValue(11, $clienteDTO->getEmail());
            $stmt->bindValue(12, $clienteDTO->getStattus());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirCliente($idcliente) {
        try {
            $sql = "DELETE FROM cliente 
                   WHERE idcliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getClienteById($idcliente) {
        try {
            $sql = "SELECT IdCliente, Nome,CPF,RG,DataNascimento AS datanascimento,Logradouro,Cidade,Bairro,UF,Telefone,Celular, email,Stattus FROM cliente WHERE idcliente = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idcliente);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateClienteById(ClienteDTO $clienteDTO) {
        try {
            $sql = "UPDATE cliente SET nome=?,
                                       Cpf=?,
                                       RG=?,
                                       DataNascimento=?,
                                       Logradouro=?, 
                                       Bairro=?,
                                       Cidade=?,
                                       UF=?,
                                       Telefone=?,
                                       Celular=?,
                                       email=?,
                                       stattus=? 
                    WHERE idcliente= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $clienteDTO->getNome());
            $stmt->bindValue(2, $clienteDTO->getCpf());
            $stmt->bindValue(3, $clienteDTO->getRg());
            $stmt->bindValue(4, $clienteDTO->getDataNascimento());
            $stmt->bindValue(5, $clienteDTO->getLogradouro());
            $stmt->bindValue(6, $clienteDTO->getBairro());
            $stmt->bindValue(7, $clienteDTO->getCidade());
            $stmt->bindValue(8, $clienteDTO->getUf());
            $stmt->bindValue(9, $clienteDTO->getTelefone());
            $stmt->bindValue(10, $clienteDTO->getCelular());
            $stmt->bindValue(11, $clienteDTO->getEmail());
            $stmt->bindValue(12, $clienteDTO->getStattus());            
            $stmt->bindValue(13, $clienteDTO->getIdCliente());
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
