﻿<!-- ## !!ADICIONE O CABECALHO E O RODAPE PARA ESTA PAGINA -->
<!-- Use o controladorProduto.php para encaminhar os dados do seu cadastro -->
<?php require_once "cabecalho.php";?>
<h2>Cadastro de Produtos</h2>
<form action="../../controllers/controladorProduto.php?acao=cadastrar" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="titulo" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preço</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option >Meninas</option>
            <option>Maninos</option>
            <option>Corrida</option>
            <option>Carro</option>
            <option>Guerra</option>
            <option>Esporte</option>
            <option>Armas</option>
            <option>Aventura</option>
            <option>Geral</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>

<?php require_once "rodape.php";?>