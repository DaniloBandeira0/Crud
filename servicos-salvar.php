<?php
//Requisitar os dados do formulario
$categoria = $_POST["categoria"];
$servico = $_POST["servico"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];




//Montar um sql de insert
$sql = "insert into servicos(servico, descricao, preco, categoria) values('$servico', '$descricao', '$preco','$categoria')";



//incluir o arquivo de conexão
include "conexao.php";

//executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

//Fechar conexão
mysqli_close($conexao);

//Redirecionar para e pagina listar
header("Location: servicos-listar.php");

?>