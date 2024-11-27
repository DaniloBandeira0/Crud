<?php include "heder.php";?>

<main>
<h2>Adicionar novo serviço</h2>

<form method="post" action="servicos-salvar.php">
    <label><strong>Serviço:</strong> <input name="servico"></label> <br>
    <label><strong>Descrição:</strong> <input name="descricao"></label> <br>
    <label><strong>Categoria:</strong> <input name="categoria"></label> <br>
    <label><strong>Preço:</strong> <input name="preco"></label> <br>
    <button type="subimit">Salvar</button>
</form>

</main>

<?php include "footer.php";?>