<?php include "heder.php";?>
<?php
$id = $_GET['id'];
$sql = "select * from clientes where id = $id";
$nome = $idade = $telefone = $endereco = "";

include "conexao.php";
$resultado = mysqli_query($conexao,$sql);
while ($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $idade = $linha['idade'];
    $telefone = $linha['telefone'];
    $endereco = $linha['endereco'];

    

}

mysqli_close($conexao)


?>

<main>
<h2>Editar cliente</h2>

<form method="post" action="cliente-atualizar.php?id=<?=$id;?>">
    <label><strong>Nome:</strong> <input name="nome" value="<?=$nome;?>"></label> <br>
    <label><strong>idade:</strong> <input name="idade"value="<?=$idade;?>"></label> <br>
    <label><strong>telefone:</strong> <input name="telefone"value="<?=$telefone;?>"></label> <br>
    <label><strong>endereco:</strong> <input name="endereco"value="<?=$endereco;?>"></label> <br>
    <button type="subimit">Salvar</button>
</form>

</main>

<?php include "footer.php";?>