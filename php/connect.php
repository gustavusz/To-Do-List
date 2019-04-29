<?php
    //variaveis com os dados do nosso banco de dados.
    $server = "localhost";
    $user = "root";
    $passwd = "";
    $db = "Database";

    $link = new mysqli($server, $user, $passwd, $db); //Criando objeto de conexão.

    if ($link->connect_error){ // Verificando se a conexão obteve exito.
        echo 'Erro na conexão'.$link->connect_error; //Retornando mensagem de erro.
    };

?>