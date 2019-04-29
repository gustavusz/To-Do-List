<?php 
    require_once '../templates/header.php'; //Requerindo o header em HTML.
    require_once '../php/connect.php'; //Requerindo a conexão com o banco de dados.
    require_once 'todo.class.php'; //Requerindo a Classe de Todos.

    $todo = new Todo($_GET['text']); //Criando objeto com o texto passado.

    $todoPronto = $link->escape_string($todo->getContent()); //Formatando para adicionar ao banco de dados.
    $idPronto = $link->escape_string($_GET['id']); //Formatando para adicionar ao banco de dados.

    $sql = $sql = "UPDATE Todos SET content = '$todoPronto' WHERE id = '$idPronto'"; //Comando mysql atribuido a uma variavel.

    if ($link->query($sql)){ //Verificando se a query teve exito.
        header ('Location: ../paginas/index.php?sucesso'); //Voltando a index e passando uma mensagem de sucesso pela URL.
    }else{
        header ('Location: ../paginas/index.php?error'); //Voltando a index e passando uma mensagem de erro pela URL.
    };
    
?>