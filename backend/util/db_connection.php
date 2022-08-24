<?php 

        //chaves de acesso ao banco
        $user = "root";
        $password = "";
        $hostname = "localhost:3306";
        $database = "parimeikerWeb";

        $mysqli = new mysqli($hostname, $user, $password);
    class DB_Connection{

        public function connect(){
            global $mysqli;
            global $database;
            $mysqli -> query("CREATE DATABASE IF NOT EXISTS $database");
            $mysqli->select_db($database);
        }


    }

    

?>