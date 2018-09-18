<?php

require_once "global.php";

try {

    $categoria = new Categoria();
    $categorias = $categoria->listar();

    foreach ($categorias as $c)
    {
        $categoriaAtualizar = new Categoria($c['id']);
        $categoriaAtualizar->nome = "Categoria ". $categoriaAtualizar->nome;
        $categoriaAtualizar->atualizar();
    }

} catch (Exception $e) {

    Erro::tratarErro($e);
}