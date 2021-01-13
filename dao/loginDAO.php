<?php

require_once 'conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($cpf,$senha) {
        try {
            $sql = "SELECT * FROM tecnico
                    WHERE cpf=? AND senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cpf);
            $stmt->bindValue(2, $senha);           
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
