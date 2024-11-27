<?php include "heder.php";?>

<main>
<h2>Adicionar novo Cliente</h2>

<form method="post" action="cliente-salvar.php">
    <label><strong>Nome:</strong> <input name="nome"></label> <br>
    <label><strong>Idade:</strong> <input name="idade"></label> <br>
    <label><strong>Telefone:</strong> <input name="telefone"></label> <br>
    <label><strong>Endereço:</strong> <input name="endereco"></label> <br>
    <button type="subimit">Salvar</button>
</form>

</main>

<?php include "footer.php";?>