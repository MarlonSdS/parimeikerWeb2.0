<?php         
    //conexão com o banco
    include('../util/db_connection.php');
    $sql = new DB_connection();
    $sql->connect();

    //tabela de usuario
    include('../models/ClientUser.php');
    $clientUser = new ClientUser();

    if($_GET['cadastrar'] == '1'){
        $clientUser->createTable();
        $clientUser->saveUser('teste2', 'email', '111', '100');
    }

   


        
    
?>