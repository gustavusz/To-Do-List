<?php 

    class Todo //Criando classe Todo.
    {
        private $content; //Atributo conteúdo.
        
        function __construct($text) { //Constructor recebendo texto e atribuindo ao conteudo.
            $this->content = $text;
        }
        function setContent($text) //Comando set para modificar o conteúdo.
        {
            $this->content = $text;
        }
        function getContent() //Comando get para pegar o conteúdo.
        {
            return (
                $this->content
            );
        }
    };

?>    