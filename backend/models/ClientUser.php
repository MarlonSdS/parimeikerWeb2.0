<?php
    include_once('../util/db_connection.php');
class ClientUser{

    public function createTable(){
        global $database;
        $sql = new DB_Connection();
        $sql->connect();
        global $mysqli;
        $mysqli->select_db($database);
        $mysqli -> query("CREATE TABLE IF NOT EXISTS usuario(
            id INT(6) AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(30) NOT NULL,
            email VARCHAR(100) NOT NULL,
            telefone VARCHAR(14) NOT NULL,
            cpf VARCHAR(20) NOT NULL
        )");
    }

    public function saveUser($nome, $email, $telefone, $cpf){
        global $mysqli;
        $mysqli -> query("INSERT INTO usuario(nome, email, telefone, cpf) VALUES('$nome', '$email', '$telefone', '$cpf')");
    }
}
?>