<?php 

    require_once '../templates/header.php'; //Requerindo o header em HTML.
    require_once '../php/connect.php'; //Requerindo a conexão com o banco de dados.
    
    if (isset($_GET['id'])){ //Verificando a ID passada pela URL.
        $id = $link->escape_string ($_GET['id']); //Formatando a variavel para incluir no banco de dados.
        $sql = "SELECT * FROM Todos WHERE id = '$id'"; //Comando mysql atribuido a uma variavel.
        $result = $link->query($sql); //Realizando a query através do objeto de conexão.
        $todo = $result->fetch_assoc(); //Comando que cria um array, para mostrar o valor que foi passado.
    }

?>
    <!-- Formulário para remover um Todo -->
    <form method="GET" action="../php/remove.php">

        <div class="row">

            <!-- Caixa de texto simbólica para coletar o ID. -->
            <input type="hidden" name="id" id="id" value="<?php echo $todo['id']; ?>">


            <div class="input-field">
                <label for="text">Tem certeza que deseja remover?</label>
                <!-- Caixa de texto para mostrar o Todo a ser removido. -->
                <input type="text" name="text" id="text" value="<?php echo $todo['content']; ?>" class="col s11">
            </div>

            <!-- Botão para enviar o formulario. -->
            <button type="submit" class="btn btn-floating red">
            <i class="material-icons">delete</i>  
            </button>  
        
        </div>

    </form>

    <br>

    <div class="row">
        <!-- Link para retornar ao Index. -->
        <a href="index.php" class="col s12 btn blue">
        <i class="material-icons">keyboard_backspace</i>  
        </a>
    </div>

<?php 
    require_once '../templates/footer.php'; //Requerindo o footer em HTML.
?>