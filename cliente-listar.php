<?php
 include "heder.php";
 include "conexao.php";
 ?>
<main>

<h2>Todos os Clientes</h2>

<a href="cliente-cadastro.php"> Adicionar novo Cliente</a>

<table border="2">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </tr>

<?php

$sql = "select * from clientes";
$resultado = mysqli_query ($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td>{$linha['nome']}</td>";
    echo "<td>{$linha['idade']}</td>";
    echo "<td>{$linha['telefone']}</td>";
    echo "<td>{$linha['endereco']}</td>";
    
    

    echo "<td>";
    echo "<a href='cliente-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixeira.png' width='20px'>";
    echo "<a href='cliente-editar.php?id={$linha['id']}'>";
    echo "<img src='editar.webp' width='20px'>";
    echo "</a>";
    echo "</td>";
    echo "</tr>";
}

mysqli_close ($conexao);

/*
// Para debugar
echo "<pre>";
print_r($resultado);
echo "</pre>";
//Fim debugar
*/

?>
</table>


</main>
<?php include "footer.php";?>
