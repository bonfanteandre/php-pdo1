<?php

require_once "classes/Config.php";

function carregarClasse($classe)
{

    $arquivo = "classes/" . $classe . ".php";

    if (file_exists($arquivo))
    {
        require_once $arquivo;
    }
}

spl_autoload_register("carregarClasse");