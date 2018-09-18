<?php

class Conexao
{

    private static $conexao;
    private static $dsn = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_DATABASE;

    public static function obterConexao()
    {
        if (self::$conexao == NULL) {
            self::$conexao = new PDO(self::$dsn, DB_USER, DB_PASSWORD);
        }

        self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conexao;
    }

}