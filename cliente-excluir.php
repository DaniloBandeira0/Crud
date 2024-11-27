<?php
// Requisitar os dados
$id = $_GET['id'];



//Montar um sql de delete
$sql = "delete from clientes where id = $id";

//Incluir arquivo de conexão
include "conexao.php";

//Executar o sql delet no BD
$resultado = mysqli_query ($conexao, $sql);

//Fechar a conexão
mysqli_close($conexao);

// Redirecionar para a pagina listar
header("Location: cliente-listar.php");



?>