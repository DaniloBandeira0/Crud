<?php
 include "heder.php";
 include "conexao.php";
 ?>
<main>

<h2>Todos os serviços</h2>

<a href="agenda-cadastro.php">Marque seu horário</a>

<table border="2">
    <tr>
        <th>Funcionario</th>
        <th>Data</th>
        <th>Horario</th>
        <th>Servico</th>
        
        
    </tr>

<?php

$sql = "select * from agenda";
$resultado = mysqli_query ($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td>{$linha['funcionario']}</td>";
    echo "<td>{$linha['data']}</td>";
    echo "<td>{$linha['horario']}</td>";
    echo "<td>{$linha['servico']}</td>";
    
    

    echo "<td>";
    echo "<a href='agenda-excluir.php?id={$linha['id']}'>";
    echo "<img src='lixeira.png' width='20px'>";
    echo "<a href='agenda-editar.php?id={$linha['id']}'>";
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
