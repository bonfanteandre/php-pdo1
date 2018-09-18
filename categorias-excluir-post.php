<?php

require_once "global.php";

try {

    $id = $_GET["id"];

    $categoria = new Categoria();
    $categoria->id = $id;
    $categoria->excluir();

    header("Location: categorias.php");

} catch (Exception $e) {

    Erro::tratarErro($e);
}