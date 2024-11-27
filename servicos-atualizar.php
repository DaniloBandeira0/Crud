<?php
// Requisitar os dados do formolário
$id = $_GET['id'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];

//Montar um sql update
$sql = "update servicos set servico = '$servico',descricao = '$descricao', preco = '$preco', categoria = '$categoria' where id = '$id'";

//Incluir o arquivo
include "conexao.php";

//Executar o sql update no BD
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("Location: servicos-listar.php");


//Fechar conexao




?>