<?php
 include "heder.php";
 include "conexao.php";
 ?>
<main>

<h2>Todos os serviços</h2>

<a href="servicos-cadastros.php"> Adicionar novo serviço</a>

<table border="2">
    <tr>
        <th>Serviço</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>categoria</th>
        <th>Ações</th>
    </tr>

<?php

$sql = "select * from servicos";
$resultado = mysqli_query ($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td>{$linha['servico']}</td>";
    echo "<td>{$linha['descricao']}</td>";
    echo "<td>{$linha['preco']}</td>";
    echo "<td>{$linha['categoria']}</td>";
    
    

    echo "<td>";
    echo "<a href='servicos-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixeira.png' width='20px'>";
    echo "<a href='servicos-editar.php?id={$linha['id']}'>";
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
