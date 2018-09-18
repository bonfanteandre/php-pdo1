<?php require_once 'cabecalho.php' ?>
<?php

require_once "global.php";

try {

    if (!isset($_GET["id"])) {
        header("Location: categorias.php");
    }

    $categoria = new Categoria($_GET["id"]);

} catch (Exception $e) {

    Erro::tratarErro($e);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="categoria-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <input type="hidden" name="id" value="<?=$categoria->id?>">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="text" name="nome" value="<?=$categoria->nome?>" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
