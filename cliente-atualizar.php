<?php
// Requisitar os dados do formolário
$id = $_GET['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

//Montar um sql update
$sql = "update clientes set  nome = '$nome', idade = '$idade', telefone = '$telefone', endereco= '$endereco' where id = '$id'";

//Incluir o arquivo
include "conexao.php";

//Executar o sql update no BD
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("Location: cliente-listar.php");


//Fechar conexao




?>