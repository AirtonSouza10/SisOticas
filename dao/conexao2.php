<?php

abstract class Conexao {

    private static $instance;

    /**
     * 
     * @return PDO
     */
    public static function getInstance() {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=sql108.byethost.com;dbname=b7_24214268_sisotica;charset=UTF8", "b7_24214268", "naira142536");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (PDOException $exc) {
            echo "Erro ao conectar o banco de dados :" . $exc->getMessage();
        }
    }

}

?>
