<?php

require_once "global.php";

class Categoria
{

    public $id;
    public $nome;

    function __construct($id = 0)
    {
        if ($id > 0)
        {
            $this->id = $id;
            $this->carregar();
        }
    }

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $resultado = Conexao::obterConexao()->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $this->nome . "')";
        Conexao::obterConexao()->exec($query);
    }

    public function atualizar()
    {
        $query = "UPDATE categorias SET nome = '" . $this->nome . "' WHERE id = " . $this->id;
        Conexao::obterConexao()->exec($query);
    }

    public function carregar()
    {
        $query = "SELECT id, nome FROM categorias WHERE id = " . $this->id;

        $resultado = Conexao::obterConexao()->query($query);
        $categoria = $resultado->fetch();

        $this->id = $categoria["id"];
        $this->nome = $categoria["nome"];
    }

    public function excluir()
    {
        $query = "DELETE FROM categorias WHERE id = " . $this->id;
        Conexao::obterConexao()->exec($query);
    }

    public function teste()
    {
        Erro::tratarErro(new Exception("teste"));
    }
}