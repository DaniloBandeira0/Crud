<?php include "heder.php";?>
<?php
$id = $_GET['id'];
$sql = "select * from servicos where id = $id";
$servico = $descricao = $preco = $categoria = "";

include "conexao.php";
$resultado = mysqli_query($conexao,$sql);
while ($linha = mysqli_fetch_assoc($resultado)){
    $servico = $linha['servico'];
    $descricao = $linha['descricao'];
    $preco = $linha['preco'];
    $categoria = $linha['categoria'];

    

}

mysqli_close($conexao)


?>

<main>
<h2>Editar serviço</h2>

<form method="post" action="servicos-atualizar.php?id=<?=$id;?>">
    <label><strong>Serviço:</strong> <input name="servico" value="<?=$servico;?>"></label> <br>
    <label><strong>Descrição:</strong> <input name="descricao"value="<?=$descricao;?>"></label> <br>
    <label><strong>Categoria:</strong> <input name="categoria"value="<?=$categoria;?>"></label> <br>
    <label><strong>Preço:</strong> <input name="preco"value="<?=$preco;?>"></label> <br>
    <button type="subimit">Salvar</button>
</form>

</main>

<?php include "footer.php";?>