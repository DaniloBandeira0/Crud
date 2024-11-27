<?php
//Requisitar os dados do formulario
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];


//Montar um sql de insert
$sql = "insert into clientes(nome, idade, telefone, endereco) values ('$nome', '$idade', '$telefone','$endereco')";



//incluir o arquivo de conexão
include "conexao.php";

//executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

//Fechar conexão
mysqli_close($conexao);

//Redirecionar para e pagina listar
header("Location: cliente-listar.php");

?>