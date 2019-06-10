<?php

    require_once '../templates/header.php'; //Requerindo o header em HTML.
    require_once '../php/connect.php'; //Requerindo a conexão com o banco de dados. 

?>
    <!-- Formulário para adicionar um Todo -->
    <form method="GET" action="../php/add.php">

        <div class="row">
            <div class="input-field">
                <label for="text">Digite o seu novo To-do:</label>
                <!-- Caixa de texto que irá coletar o Todo a ser adicionado. -->
                <input type="text" name="text" id="text" class="col s11">
            </div>

            <!-- Botão para enviar o formulario. -->
            <button type="submit" value="✔️" class="btn btn-floating green">
            <i class="material-icons">check</i>  
            </button>

        </div>
        
    </form>
    
    <br>
    <div class="row">
        <!-- Link para retornar ao Index. -->
        <a href="../index.php" class="col s12 btn blue">
        <i class="material-icons">keyboard_backspace</i>  
        </a>
    </div>

<?php 
    require_once '../templates/footer.php'; //Requerindo o footer em HTML.
?>