<?php

require_once 'conexao.php'; 


class ProdutoDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAllProdutos() {
        try {
            $sql = "SELECT idproduto, descricao, marca, tipo, cor,obs, Stattus 
            FROM produto ORDER BY idproduto DESC LIMIT 20";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function getProdutosPesq($pesq) {
        try {
            $sql = "SELECT idproduto, descricao, marca, tipo, cor,obs, Stattus 
            FROM produto WHERE descricao LIKE '%$pesq%' ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function salvarProduto(ProdutoDTO $produtoDTO) {
        try {
            $sql = "INSERT INTO produto (descricao,marca,tipo,cor,obs,stattus) 
                    VALUES (?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $produtoDTO->getDescricao());
            $stmt->bindValue(2, $produtoDTO->getMarca());
            $stmt->bindValue(3, $produtoDTO->getTipo());
            $stmt->bindValue(4, $produtoDTO->getCor());
            $stmt->bindValue(5, $produtoDTO->getObs());
            $stmt->bindValue(6, $produtoDTO->getStattus());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function excluirProduto($idproduto) {
        try {
            $sql = "DELETE FROM produto 
                   WHERE idproduto = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idproduto);
            $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getProdutoById($idproduto) {
        try {
            $sql = "SELECT idproduto, descricao, marca, tipo, cor,obs, stattus FROM produto WHERE idproduto = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idproduto);
            $stmt->execute();
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);
            return $produto;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function updateProdutoById(ProdutoDTO $produtoDTO) {
        try {
            $sql = "UPDATE produto SET descricao=?,
                                       marca=?,
                                       tipo=?,
                                       cor=?,
                                       obs=?,
                                       stattus=?
                    WHERE idproduto= ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $produtoDTO->getDescricao());
            $stmt->bindValue(2, $produtoDTO->getMarca());
            $stmt->bindValue(3, $produtoDTO->getTipo());
            $stmt->bindValue(4, $produtoDTO->getCor());
            $stmt->bindValue(5, $produtoDTO->getObs());
            $stmt->bindValue(6, $produtoDTO->getStattus());
            $stmt->bindValue(7, $produtoDTO->getIdproduto());           
            $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>

