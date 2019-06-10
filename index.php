<?php 
    
    require_once '../templates/header.php'; //Requerindo o header em HTML.
    require_once '../php/connect.php'; //Requerindo a conexão com o banco de dados.
    $sql = "SELECT * FROM Todos"; //Comando mysql atribuido a uma variavel.
    $result = $link->query($sql); //Realizando a query através do objeto de conexão.
    while ($todo = $result->fetch_assoc()) { //Repetição que cria um array, para mostrar os valores.

?>

    <div class="row">

        <label>
        <input type="checkbox" />
        <span class="col s10">
            <!-- Caixa de texto que ficará os Todos, somente leitura e desabilitada. -->
            <input type="text" value="<?php echo $todo['content']; ?>" class="desative" readonly>
        </span>
        </label>
     
     
        <!-- Link para editar um todo, passando o ID pela URL -->
        <a href="./paginas/editTodo.php?id=<?php echo $todo['id']; ?>" class="btn green"><i class="material-icons">edit</i></a>

        <!-- Link para remover um todo, passando o ID pela URL -->
        <a href="./paginas/removeTodo.php?id=<?php echo $todo['id']; ?>" class="btn red"><i class="material-icons">delete</i></a>
    
    </div>

    <br>

<?php
  }
?>

    <div class="row">
        <!-- Link para retornar ao Index. -->
        <a href="./paginas/addTodo.php" class="col s12 btn blue">Adicionar</a>
    </div>

<?php 

    require_once '../templates/footer.php';  //Requerindo o footer em HTML.

?>
